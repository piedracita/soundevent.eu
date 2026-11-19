<?php
// 1. GESTIÓ SEGURA DE LA SESSIÓ
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. DETECCIÓ I ASSIGNACIÓ D'IDIOMA ($lang)
$lang = 'es';
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'cat', 'en'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

// 3. CONFIGURACIÓ GLOBAL DE WHATSAPP & MAILTO
$phone_number = "34625171701";
$email_address = "info@soundevent.eu";

switch ($lang) {
    case 'cat':
        $wa_text = "Hola! Voldria més informació sobre SoundEvent.\n\nData:\nTipus d'esdeveniment:";
        $email_subject = "Sol·licitud d'informació - SoundEvent";
        $email_body = "Hola!\n\nVoldria més informació sobre SoundEvent.\n\nData:\nTipus d'esdeveniment:";
        break;

    case 'en':
        $wa_text = "Hello! I would like to know more about SoundEvent.\n\nDate:\nEvent type:";
        $email_subject = "Information Request - SoundEvent";
        $email_body = "Hello!\n\nI would like to know more about SoundEvent.\n\nDate:\nEvent type:";
        break;

    case 'es':
    default:
        $wa_text = "¡Hola! Quisiera más información sobre SoundEvent.\n\nFecha:\nTipo de evento:";
        $email_subject = "Solicitud de información - SoundEvent";
        $email_body = "¡Hola!\n\nQuisiera más información sobre SoundEvent.\n\nFecha:\nTipo de evento:\n";
        break;
}

// 4. GENERACIÓ DE LES URLs
$wa_url = "https://wa.me/" . $phone_number . "?text=" . rawurlencode($wa_text);
$mailto_url = "mailto:" . $email_address . "?subject=" . rawurlencode($email_subject) . "&body=" . rawurlencode($email_body);
?>