<?php
function transliterate_english($text) {
  $map = array(
    '|' => 'ء',
    '>' => 'آ',
    '&' => 'أ',
    '<' => 'ؤ',
    '}' => 'إ',
    '}' => 'ئ',
    'A' => 'ا',
    'b' => 'ب',
    'p' => 'ة',
    't' => 'ت',
    'v' => 'ث',
    'j' => 'ج',
    'H' => 'ح',
    'x' => 'خ',
    'd' => 'د',
    '*' => 'ذ',
    'r' => 'ر',
    'z' => 'ز',
    's' => 'س',
    '$' => 'ش',
    'S' => 'ص',
    'D' => 'ض',
    'T' => 'ط',
    'Z' => 'ظ',
    'E' => 'ع',
    'g' => 'غ',
    'f' => 'ف',
    'q' => 'ق',
    'k' => 'ك',
    'l' => 'ل',
    'm' => 'م',
    'n' => 'ن',
    'h' => 'ه',
    'w' => 'و',
    'Y' => 'ى',
    'y' => 'ي',
    'F' => 'ً',
    'N' => 'ٌ',
    'K' => 'ٍ',
    'a' => 'َ',
    'u' => 'ُ',
    'i' => 'ِ',
    '~' => 'ّ',
    'o' => 'ْ'
  );
  $transliterated_text = strtr($text, $map);
  return $transliterated_text;
}

// Example usage
$english_text = 'AlslAm Elykm';
$arabic_text = transliterate_english($english_text);
echo $arabic_text; // Output: "السلام عليكم"
?>
