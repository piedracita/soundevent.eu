<?php
$base_url = "https://www.soundevent.eu/";

// Carpetes o fitxers que vols ignorar completament
$ignorar = [
    '.github',
    'assets',
    'common-php',
    'php',
    'lang',      // Ignorar fitxers de traduccions
    'sitemap.php' // Evita que el mateix script s'inclogui com a URL
];

header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$directory = new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($directory);

foreach ($iterator as $info) {
    $ruta_relativa = str_replace(__DIR__ . DIRECTORY_SEPARATOR, '', $info->getPathname());
    
    // Normalitzem les barres per a Windows (\ a /)
    $ruta_relativa = str_replace('\\', '/', $ruta_relativa);

    // Comprovem si el fitxer està dins d'una carpeta o fitxer a ignorar
    $ha_d_ignorar = false;
    foreach ($ignorar as $pauta) {
        if (strpos($ruta_relativa, $pauta) === 0 || basename($ruta_relativa) === $pauta) {
            $ha_d_ignorar = true;
            break;
        }
    }

    if (!$ha_d_ignorar && $info->isFile()) {
        $extensio = $info->getExtension();

        if ($extensio == 'php' || $extensio == 'html') {
            
            $url_path = $ruta_relativa;

            // Neteja per a fitxers index.php (ex. casaments/index.php -> casaments/)
            if (basename($url_path) == 'index.php') {
                $url_path = dirname($url_path);
                if ($url_path == '.') $url_path = '';
                else $url_path .= '/';
            }

            $loc = htmlspecialchars($base_url . $url_path, ENT_QUOTES, 'UTF-8');
            $ultima_modificacio = date("Y-m-d", $info->getMTime());
            $prioritat = ($url_path == '') ? '1.0' : '0.8';

            echo "  <url>\n";
            echo "    <loc>{$loc}</loc>\n";
            echo "    <lastmod>{$ultima_modificacio}</lastmod>\n";
            echo "    <changefreq>monthly</changefreq>\n";
            echo "    <priority>{$prioritat}</priority>\n";
            echo "  </url>\n";
        }
    }
}

echo '</urlset>';
?>