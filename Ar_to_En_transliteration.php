function transliterate_arabic($text) {
  $map = array(
    'ء' => '|',
    'آ' => '>', 
    'أ' => '&', 
    'ؤ' => '<',
    'إ' => '}', 
    'ئ' => '}', 
    'ا' => 'A', 
    'ب' => 'b', 
    'ة' => 'p', 
    'ت' => 't', 
    'ث' => 'v', 
    'ج' => 'j', 
    'ح' => 'H', 
    'خ' => 'x', 
    'د' => 'd', 
    'ذ' => '*', 
    'ر' => 'r', 
    'ز' => 'z', 
    'س' => 's', 
    'ش' => '$', 
    'ص' => 'S', 
    'ض' => 'D', 
    'ط' => 'T', 
    'ظ' => 'Z', 
    'ع' => 'E', 
    'غ' => 'g', 
    'ف' => 'f', 
    'ق' => 'q', 
    'ك' => 'k', 
    'ل' => 'l', 
    'م' => 'm', 
    'ن' => 'n', 
    'ه' => 'h', 
    'و' => 'w', 
    'ى' => 'Y', 
    'ي' => 'y', 
    'ً' => 'F', 
    'ٌ' => 'N', 
    'ٍ' => 'K', 
    'َ' => 'a', 
    'ُ' => 'u', 
    'ِ' => 'i', 
    'ّ' => '~', 
    'ْ' => 'o'
  );
  $transliterated_text = strtr($text, $map);
  return $transliterated_text;
}

// Example usage
$arabic_text = 'السلام عليكم';
$english_text = transliterate_arabic($arabic_text);
