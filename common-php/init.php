<?php
// 1. Gestió segura de la sessió
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Detecció i assignació de l'idioma ($lang)
$lang = 'es';
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'cat', 'en'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

// 3. Configuració global de WhatsApp
$phone_number = "34625171701";

switch ($lang) {
    case 'cat':
        $wa_text = "Hola! Voldria més informació per a un esdeveniment. Data: [Data] | Tipus d'esdeveniment: [Tipus]";
        break;
    case 'en':
        $wa_text = "Hello! I would like more information for an event. Date: [Date] | Event type: [Type]";
        break;
    case 'es':
    default:
        $wa_text = "¡Hola! Quisiera más información para un evento. Fecha: [Fecha] | Tipo de evento: [Tipo]";
        break;
}

$wa_url = "https://wa.me/" . $phone_number . "?text=" . urlencode($wa_text);

// 4. Configuració global de Mailto
$email_address = "info@soundevent.eu";

switch ($lang) {
    case 'cat':
        $wa_text = "Hola! Voldria més informació per a un esdeveniment. Data: [Data] | Tipus d'esdeveniment: [Tipus]";
        $email_subject = "Solicitud d'informació - SoundEvent";
        break;
    case 'en':
        $wa_text = "Hello! I would like more information for an event. Date: [Date] | Event type: [Type]";
        $email_subject = "Information Request - SoundEvent";
        break;
    case 'es':
    default:
        $wa_text = "¡Hola! Quisiera más información para un evento. Fecha: [Fecha] | Tipo de evento: [Tipo]";
        $email_subject = "Solicitud de información - SoundEvent";
        break;
}

// Generem la URL per al correu electrònic
$mailto_url = "mailto:" . $email_address . "?subject=" . rawurlencode($email_subject);

?>