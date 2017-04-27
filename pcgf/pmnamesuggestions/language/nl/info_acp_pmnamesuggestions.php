<?php

/**
 * @author    MarkusWME <markuswme@pcgamingfreaks.at>
 * @copyright 2016 MarkusWME
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @version   1.1.0
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// Merging language data for the ACP with the other language data
$lang = array_merge($lang, array(
    'ACP_PCGF_PMNAMESUGGESTIONS'                           => 'PB Naam Suggesties',
    'ACP_PCGF_PMNAMESUGGESTIONS_AVATAR_IMAGE_SIZE'         => 'Avatar afbeelding grootte',
    'ACP_PCGF_PMNAMESUGGESTIONS_AVATAR_IMAGE_SIZE_EXPLAIN' => 'Stel de breedte en hoogte in van de avatar volgens de opgegeven waarde.  Om de avatar te verbergen kan je de waarde instellen op 0.',
    'ACP_PCGF_PMNAMESUGGESTIONS_SETTINGS'                  => 'Instellingen',
    'ACP_PCGF_PMNAMESUGGESTIONS_SETTINGS_EXPLAIN'          => 'Hier kunt u de instellingen voor PB Naam Suggesties aanpassen.',
    'ACP_PCGF_PMNAMESUGGESTIONS_SETTINGS_SAVED'            => 'De instellingen werden succesvol opgeslagen!',
    'ACP_PCGF_PMNAMESUGGESTIONS_USER_COUNT'                => 'Suggesties aantal',
    'ACP_PCGF_PMNAMESUGGESTIONS_USER_COUNT_EXPLAIN'        => 'Het maximum aantal voorgestelde gebruikers (Waardes tussen 0 en 100 zijn toegestaan).',
));
