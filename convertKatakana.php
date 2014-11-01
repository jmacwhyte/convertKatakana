<?php
/**
 * Copyright James MacWhyte
 * Date: 10/27/14
 */

/**
 * Class convertKatakana
 */
class convertKatakana {

    static $encoding = 'UTF-8';

    /**
     * Romanize a single Katakana character (or common combinations).
     *
     * @param $character
     * @return bool|string
     */
    static function romanizeCharacter($character){
        switch ($character){
            case "ア" :
                return "A";
                break;
            case "イ" :
                return "I";
                break;
            case "ウ" :
                return "U";
                break;
            case "エ" :
                return "E";
                break;
            case "オ" :
                return "O";
                break;
            case "カ" :
                return "KA";
                break;
            case "キ" :
                return "KI";
                break;
            case "ク" :
                return "KU";
                break;
            case "ケ" :
                return "KE";
                break;
            case "コ" :
                return "KO";
                break;
            case "サ" :
                return "SA";
                break;
            case "シ" :
                return "SHI";
                break;
            case "ス" :
                return "SU";
                break;
            case "セ" :
                return "SE";
                break;
            case "ソ" :
                return "SO";
                break;
            case "タ" :
                return "TA";
                break;
            case "チ" :
                return "CHI";
                break;
            case "ツ" :
                return "TSU";
                break;
            case "テ" :
                return "TE";
                break;
            case "ト" :
                return "TO";
                break;
            case "ナ" :
                return "NA";
                break;
            case "ニ" :
                return "NI";
                break;
            case "ヌ" :
                return "NU";
                break;
            case "ネ" :
                return "NE";
                break;
            case "ノ" :
                return "NO";
                break;
            case "ハ" :
                return "HA";
                break;
            case "ヒ" :
                return "HI";
                break;
            case "フ" :
                return "FU";
                break;
            case "ヘ" :
                return "HE";
                break;
            case "ホ" :
                return "HO";
                break;
            case "マ" :
                return "MA";
                break;
            case "ミ" :
                return "MI";
                break;
            case "ム" :
                return "MU";
                break;
            case "メ" :
                return "ME";
                break;
            case "モ" :
                return "MO";
                break;
            case "ヤ" :
                return "YA";
                break;
            case "ユ" :
                return "YU";
                break;
            case "ヨ" :
                return "YO";
                break;
            case "ラ" :
                return "RA";
                break;
            case "リ" :
                return "RI";
                break;
            case "ル" :
                return "RU";
                break;
            case "レ" :
                return "RE";
                break;
            case "ロ" :
                return "RO";
                break;
            case "ワ" :
                return "WA";
                break;
            case "ヰ" :
                return "I";
                break;
            case "ヱ" :
                return "E";
                break;
            case "ヲ" :
                return "O";
                break;
            case "ン" :
                return "N";
                break;
            case "ヴ" :
                return "V";
                break;
            case "ガ" :
                return "GA";
                break;
            case "ギ" :
                return "GI";
                break;
            case "グ" :
                return "GU";
                break;
            case "ゲ" :
                return "GE";
                break;
            case "ゴ" :
                return "GO";
                break;
            case "ザ" :
                return "ZA";
                break;
            case "ジ" :
                return "JI";
                break;
            case "ズ" :
                return "ZU";
                break;
            case "ゼ" :
                return "ZE";
                break;
            case "ゾ" :
                return "ZO";
                break;
            case "ダ" :
                return "DA";
                break;
            case "ヂ" :
                return "JI";
                break;
            case "ヅ" :
                return "ZU";
                break;
            case "デ" :
                return "DE";
                break;
            case "ド" :
                return "DO";
                break;
            case "バ" :
                return "BA";
                break;
            case "ビ" :
                return "BI";
                break;
            case "ブ" :
                return "BU";
                break;
            case "ベ" :
                return "BE";
                break;
            case "ボ" :
                return "BO";
                break;
            case "パ" :
                return "PA";
                break;
            case "ピ" :
                return "PI";
                break;
            case "プ" :
                return "PU";
                break;
            case "ペ" :
                return "PE";
                break;
            case "ポ" :
                return "PO";
                break;
            case "キャ" :
                return "KYA";
                break;
            case "キュ" :
                return "KYU";
                break;
            case "キョ" :
                return "KYO";
                break;
            case "シャ" :
                return "SHA";
                break;
            case "シュ" :
                return "SHU";
                break;
            case "ショ" :
                return "SHO";
                break;
            case "チャ" :
                return "CHA";
                break;
            case "チュ" :
                return "CHU";
                break;
            case "チョ" :
                return "CHO";
                break;
            case "ニャ" :
                return "NYA";
                break;
            case "ニュ" :
                return "NYU";
                break;
            case "ニョ" :
                return "NYO";
                break;
            case "ヒャ" :
                return "HYA";
                break;
            case "ヒュ" :
                return "HYU";
                break;
            case "ヒョ" :
                return "HYO";
                break;
            case "ミャ" :
                return "MYA";
                break;
            case "ミュ" :
                return "MYU";
                break;
            case "ミョ" :
                return "MYO";
                break;
            case "ギャ" :
                return "GYA";
                break;
            case "ギュ" :
                return "GYU";
                break;
            case "ギョ" :
                return "GYO";
                break;
            case "ジャ" :
                return "JA";
                break;
            case "ジュ" :
                return "JU";
                break;
            case "ジョ" :
                return "JO";
                break;
            case "ヂャ" :
                return "JA";
                break;
            case "ヂュ" :
                return "JU";
                break;
            case "ヂョ" :
                return "JO";
                break;
            case "ビャ" :
                return "BYA";
                break;
            case "ビュ" :
                return "BYU";
                break;
            case "ビョ" :
                return "BYO";
            case "ピャ" :
                return "PYA";
                break;
            case "ピュ" :
                return "PYU";
                break;
            case "ピョ" :
                return "PYO";
                break;
            case "ファ" :
                return "FA";
                break;
            case "ァ" :
                return "A";
                break;
            case "ィ" :
                return "I";
                break;
            case "ゥ" :
                return "U";
                break;
            case "ェ" :
                return "E";
                break;
            case "ォ" :
                return "O";
                break;
            case "ッ" :
                return "T";
                break;
            default:
                return false;
        }
    }

    /**
     * The main method.
     *
     * @param $katakana
     * @return bool|string
     */
    static function toEnglish($katakana){
        // Set encoding
        mb_internal_encoding(self::$encoding);
        // Prepare output
        $output = '';
        // Clean input (can be omitted if pre-cleaned). Make sure there are no Hiragana or half-width Katakana characters
        $katakana = mb_convert_kana($katakana, 'KC');

        // Walk through each character and check it against our list of English values. Search for a small "tsu" which
        // indicates doubled consonant, and small ya/yu/yo which indicates combo character.
        try {
            for ($i = 0; $i < mb_strlen($katakana, self::$encoding); $i++){
                // Reset
                $nextKana = '';
                // Get current character
                $nowKana = mb_substr($katakana, $i, 1, self::$encoding);
                // Check to make sure character is valid
                if (!$nowEnglish = self::romanizeCharacter($nowKana)){
                    continue;
                }
                // If there is at least one character left ...
                if (($i + 1) < mb_strlen($katakana)){
                    // Get next character
                    $nextKana = mb_substr($katakana, $i + 1, 1);
                };
                // Check for "little tsu"
                if ($nowKana == 'ッ'){
                    if ($nextKana && $nextEnglish = self::romanizeCharacter($nextKana)){
                        $output .= substr($nextEnglish, 0, 1);
                    } else {
                        throw new Exception('Invalid character after "little tsu": ' . $nextKana);
                    }
                // If no "little tsu," check to see if it's a double-character compound
                } else if ($nextKana == 'ャ' || $nextKana == 'ュ' || $nextKana == 'ョ'){
                    if ($nextEnglish = self::romanizeCharacter($nowKana . $nextKana)){
                        $output .= $nextEnglish;
                    } else {
                        throw new Exception('Invalid big/small kana combination: ' . $nowKana . $nextKana);
                    }
                // If it's not that either, just add the English to the ouput
                } else {
                    if ($nextEnglish = self::romanizeCharacter($nowKana)){
                        $output .= $nextEnglish;
                    }
                }
            }
        } catch (Exception $e){
            echo $e;
            return false;
        }
        return $output;
    }
}
