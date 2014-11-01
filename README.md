# convertKatakana

Simple PHP static class for converting Japanese Katakana / Hiragana into English characters (Romaji)

Japanese text can be submitted as Hiragana, Katakana, or a mixture of the two. Any Kanji, Romaji, or other characters will be omitted. If the submitted text is grammatically illegal (i.e. two small tsu's in a row, etc) or the operation otherwise fails, an error will be echoed and false will be returned.

Currently, character compounds representing sounds that only exist in foreign words (ジェ “Je”, フィ “Fi”, etc) are not accurately represented and will instead be written as if the second character were full size. This is what banks and credit cards tend to do.

# Usage

Quite simple:

require(“convertKatakana.php”);

convertKatakana::toEnglish([input]);

For an example of usage see example.php.
