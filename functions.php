add_filter('gettext', 'codeithub_translate_woocommerce', 10, 3);
/**
 * Changing SKU Label
*/

function codeithub_translate_woocommerce($translation, $text, $domain) {
   if ($domain == 'woocommerce') {
        switch ($text) {
            case 'SKU':
                $translation = 'Catalogue Number:';
                break;
            case 'SKU:':
                $translation = 'Catalogue Number:';
                break;
        }
   }
    return $translation;
}
