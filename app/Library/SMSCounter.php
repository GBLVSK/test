<?php

/**
 * Item Name: Ultimate SMS - Bulk SMS Application For Marketing
 * Author: Codeglen
 * Author URL: https://codecanyon.net/user/codeglen
 */

namespace App\Library;

use stdClass;

class SMSCounter
{

    /**
     * GSM 7BIT encoding name.
     *
     * @var string
     */
    const GSM_7BIT = 'GSM_7BIT';

    /**
     * GSM 7BIT Extended encoding name.
     *
     * @var string
     */
    const GSM_7BIT_EX = 'GSM_7BIT_EX';

    /**
     * UTF16 or UNICODE encoding name.
     *
     * @var string
     */
    const UTF16 = 'UTF16';

    /**
     * Message length for GSM 7 Bit charset.
     *
     * @var int
     */
    const GSM_7BIT_LEN = 160;

    /**
     * Message length for GSM 7 Bit charset with extended characters.
     *
     * @var int
     */
    const GSM_7BIT_EX_LEN = 160;

    /**
     * Message length for UTF16/Unicode charset.
     *
     * @var int
     */
    const UTF16_LEN = 70;

    /**
     * Message length for multipart message in GSM 7 Bit encoding.
     *
     * @var int
     */
    const GSM_7BIT_LEN_MULTIPART = 153;

    /**
     * Message length for multipart message in GSM 7 Bit encoding.
     *
     * @var int
     */
    const GSM_7BIT_EX_LEN_MULTIPART = 153;

    /**
     * Message length for multipart message in GSM 7 Bit encoding.
     *
     * @var int
     */
    const UTF16_LEN_MULTIPART = 67;

    /**
     * @return int[]
     */
    public function getGsm7bitMap(): array
    {
        return [
                10, 12, 13, 32, 33, 34, 35, 36,
                37, 38, 39, 40, 41, 42, 43, 44,
                45, 46, 47, 48, 49, 50, 51, 52,
                53, 54, 55, 56, 57, 58, 59, 60,
                61, 62, 63, 64, 65, 66, 67, 68,
                69, 70, 71, 72, 73, 74, 75, 76,
                77, 78, 79, 80, 81, 82, 83, 84,
                85, 86, 87, 88, 89, 90, 91, 92,
                93, 94, 95, 97, 98, 99, 100, 101,
                102, 103, 104, 105, 106, 107, 108,
                109, 110, 111, 112, 113, 114, 115,
                116, 117, 118, 119, 120, 121, 122,
                123, 124, 125, 126, 161, 163, 164,
                165, 167, 191, 196, 197, 198, 199,
                201, 209, 214, 216, 220, 223, 224,
                228, 229, 230, 232, 233, 236, 241,
                242, 246, 248, 249, 252, 915, 916,
                920, 923, 926, 928, 931, 934, 936,
                937, 8364,
        ];
    }

    /**
     * @return int[]
     */
    public function getAddedGsm7bitExMap(): array
    {
        return [12, 91, 92, 93, 94, 123, 124, 125, 126, 8364];
    }


    /**
     * @return array
     */
    public function getGsm7bitExMap(): array
    {
        return array_merge(
                $this->getGsm7bitMap(),
                $this->getAddedGsm7bitExMap()
        );
    }

    /**
     * @return int[]
     */
    public function getTurkishGsm7bitMap(): array
    {
        return [
                10, 12, 13, 32, 33, 34, 35, 36,
                37, 38, 39, 40, 41, 42, 43, 44,
                45, 46, 47, 48, 49, 50, 51, 52,
                53, 54, 55, 56, 57, 58, 59, 60,
                61, 62, 63, 64, 65, 66, 67, 68,
                69, 70, 71, 72, 73, 74, 75, 76,
                77, 78, 79, 80, 81, 82, 83, 84,
                85, 86, 87, 88, 89, 90, 91, 92,
                93, 94, 95, 97, 98, 99, 100, 101,
                102, 103, 104, 105, 106, 107, 108,
                109, 110, 111, 112, 113, 114, 115,
                116, 117, 118, 119, 120, 121, 122,
                123, 124, 125, 126, 163, 164, 165,
                167, 196, 197, 199, 201, 209, 214,
                220, 223, 224, 228, 229, 231, 233,
                241, 242, 246, 249, 252, 286, 287,
                304, 305, 350, 351, 915, 916, 920,
                923, 926, 928, 931, 934, 936, 937,
                8364,
        ];
    }

    /**
     * @return int[]
     */
    public function getAddedTurkishGsm7bitExMap(): array
    {
        return [12, 91, 92, 93, 94, 123, 124, 125, 126, 286, 287, 304, 305, 350, 351, 8364];
    }

    /**
     * @return int[]
     */
    public function getAddedSpanishGsm7bitExMap(): array
    {
        return [12, 91, 92, 93, 94, 123, 124, 125, 126, 193, 205, 211, 218, 225, 231, 237, 243, 250, 8364];
    }

    /**
     * @return int[]
     */
    public function getPortugueseGsm7bitMap(): array
    {
        return [
                10, 12, 13, 32, 33, 34, 35, 36,
                37, 38, 39, 40, 41, 42, 43, 44,
                45, 46, 47, 48, 49, 50, 51, 52,
                53, 54, 55, 56, 57, 58, 59, 60,
                61, 62, 63, 64, 65, 66, 67, 68,
                69, 70, 71, 72, 73, 74, 75, 76,
                77, 78, 79, 80, 81, 82, 83, 84,
                85, 86, 87, 88, 89, 90, 91, 92,
                93, 94, 95, 96, 97, 98, 99, 100,
                101, 102, 103, 104, 105, 106, 107, 108,
                109, 110, 111, 112, 113, 114, 115, 116,
                117, 118, 119, 120, 121, 122, 123, 124,
                125, 126, 163, 165, 167, 170, 186, 192,
                193, 194, 195, 199, 201, 202, 205, 211,
                212, 213, 218, 220, 224, 225, 226, 227,
                231, 233, 234, 237, 242, 243, 244, 245,
                250, 252, 915, 916, 920, 928, 931, 934,
                936, 937, 8364, 8734,
        ];
    }

    /**
     * @return int[]
     */
    public function getAddedPortugueseGsm7bitExMap(): array
    {
        return [
                12, 91, 92, 93, 94, 123, 124, 125,
                126, 193, 194, 195, 202, 205, 211, 212,
                213, 218, 225, 226, 227, 231, 234, 237,
                242, 243, 245, 250, 915, 920, 928, 931,
                934, 936, 937, 8364,
        ];
    }

    /**
     * Detects the encoding, Counts the characters, message length, remaining characters.
     *
     * @return stdClass Object with params encoding,length, per_message, remaining, messages
     */
    public function count($text): stdClass
    {
        return $this->doCount($text, false);
    }

    /**
     * Detects the encoding, Counts the characters, message length, remaining characters.
     * Supports language shift tables characters.
     *
     * @return stdClass Object with params encoding,length, per_message, remaining, messages
     */
    public function countWithShiftTables($text): stdClass
    {
        return $this->doCount($text, true);
    }

    /**
     * @return stdClass Object with params encoding,length, per_message, remaining, messages
     */
    private function doCount($text, $supportShiftTables): stdClass
    {
        $unicodeArray = $this->utf8ToUnicode($text);

        // variable to catch if any ex chars while encoding detection.
        $exChars  = [];
        $encoding = $supportShiftTables
                ? $this->detectEncodingWithShiftTables($text, $exChars)
                : $this->detectEncoding($text, $exChars);

        $length = count($unicodeArray);

        if ($encoding === self::GSM_7BIT_EX) {
            $lengthExtrachars = count($exChars);
            // Each exchar in the GSM 7 Bit encoding takes one more space
            // Hence the length increases by one char for each of those Ex chars.
            $length += $lengthExtrachars;
        } elseif ($encoding === self::UTF16) {
            // Unicode chars over U+10000 occupy an extra byte
            $lengthExtra = array_reduce(
                    $unicodeArray,
                    function ($carry, $char) {
                        if ($char >= 65536) {
                            $carry++;
                        }

                        return $carry;
                    },
                    0
            );

            $length += $lengthExtra;
        }

        // Select the per message length according to encoding and the message length
        switch ($encoding) {
            case self::GSM_7BIT:
                $perMessage = self::GSM_7BIT_LEN;
                if ($length > self::GSM_7BIT_LEN) {
                    $perMessage = self::GSM_7BIT_LEN_MULTIPART;
                }
                break;

            case self::GSM_7BIT_EX:
                $perMessage = self::GSM_7BIT_EX_LEN;
                if ($length > self::GSM_7BIT_EX_LEN) {
                    $perMessage = self::GSM_7BIT_EX_LEN_MULTIPART;
                }
                break;

            default:
                $perMessage = self::UTF16_LEN;
                if ($length > self::UTF16_LEN) {
                    $perMessage = self::UTF16_LEN_MULTIPART;
                }

                break;
        }

        $messages = (int) ceil($length / $perMessage);

        if ($encoding === self::UTF16 && $length > $perMessage) {
            $count = 0;
            foreach ($unicodeArray as $char) {
                if ($count === $perMessage) {
                    $count = 0;
                } elseif ($count > $perMessage) {
                    $count = 2;
                }

                $count += $char >= 65536 ? 2 : 1;
            }

            $remaining = $perMessage - ($count > $perMessage ? 2 : $count);
        } else {
            $remaining = ($perMessage * $messages) - $length;
        }

        $return_set = new stdClass();

        $return_set->encoding    = $encoding;
        $return_set->length      = $length;
        $return_set->per_message = $perMessage;
        $return_set->remaining   = $remaining;
        $return_set->messages    = $messages;

        return $return_set;
    }

    /**
     * Detects the encoding of a particular text.
     *
     * @return string (GSM_7BIT|GSM_7BIT_EX|UTF16)
     */
    public function detectEncoding($text, &$exChars): string
    {
        if ( ! is_array($text)) {
            $text = $this->utf8ToUnicode($text);
        }

        $utf16Chars = array_diff($text, $this->getGsm7bitExMap());
        if (count($utf16Chars)) {
            return self::UTF16;
        }

        $exChars = array_intersect($text, $this->getAddedGsm7bitExMap());
        if (count($exChars)) {
            return self::GSM_7BIT_EX;
        }

        return self::GSM_7BIT;
    }

    /**
     * Detects the encoding of a particular text.
     * Supports language shift tables characters.
     *
     * @return string (GSM_7BIT|GSM_7BIT_EX|UTF16)
     */
    public function detectEncodingWithShiftTables($text, &$exChars): string
    {
        if ( ! is_array($text)) {
            $text = $this->utf8ToUnicode($text);
        }

        $gsmCharMap = array_merge(
                $this->getGsm7bitExMap(),
                $this->getTurkishGsm7bitMap(),
                $this->getAddedTurkishGsm7bitExMap(),
                $this->getAddedSpanishGsm7bitExMap(),
                $this->getPortugueseGsm7bitMap(),
                $this->getAddedPortugueseGsm7bitExMap()
        );

        $utf16Chars = array_diff($text, $gsmCharMap);
        if (count($utf16Chars)) {
            return self::UTF16;
        }

        $addedGsmCharMap = array_merge(
                $this->getAddedGsm7bitExMap(),
                $this->getAddedTurkishGsm7bitExMap(),
                $this->getAddedSpanishGsm7bitExMap(),
                $this->getAddedPortugueseGsm7bitExMap()
        );

        $exChars = array_intersect($text, $addedGsmCharMap);
        if (count($exChars)) {
            return self::GSM_7BIT_EX;
        }

        return self::GSM_7BIT;
    }

    /**
     * Generates array of unicode points for the utf8 string.
     *
     * @param $str
     *
     * @return array
     */
    public function utf8ToUnicode($str): array
    {
        $unicode    = [];
        $values     = [];
        $lookingFor = 1;
        $number     = 0;
        $len        = strlen($str);

        for ($i = 0; $i < $len; $i++) {
            $thisValue = ord($str[$i]);

            if ($thisValue < 128) {
                $unicode[] = $thisValue;
            }

            if ($thisValue >= 128) {
                if (count($values) === 0) {
                    $lookingFor = 2;

                    if ($thisValue >= 240) {
                        $lookingFor = 4;
                    } elseif ($thisValue >= 224) {
                        $lookingFor = 3;
                    }
                }

                $values[] = $thisValue;

                if (count($values) === $lookingFor) {
                    switch ($lookingFor) {
                        case 4:
                            $number = (($values[0] % 16) * 262144) + (($values[1] % 64) * 4096) + (($values[2] % 64) * 64) + ($values[3] % 64);
                            break;

                        case 3:
                            $number = (($values[0] % 16) * 4096) + (($values[1] % 64) * 64) + ($values[2] % 64);
                            break;

                        case 2:
                            $number = (($values[0] % 32) * 64) + ($values[1] % 64);
                            break;
                    }


                    $unicode[]  = $number;
                    $values     = [];
                    $lookingFor = 1;
                }
            }
        }

        return $unicode;
    }

    /**
     * Unicode equivalent chr() function.
     *
     * @return string characters
     */
    public function utf8Chr($unicode): string
    {
        $unicode = intval($unicode);

        $utf8char = chr(240 | ($unicode >> 18));
        $utf8char .= chr(128 | (($unicode >> 12) & 0x3F));
        $utf8char .= chr(128 | (($unicode >> 6) & 0x3F));
        $utf8char .= chr(128 | ($unicode & 0x3F));

        if ($unicode < 128) {
            $utf8char = chr($unicode);
        } elseif ($unicode >= 128 && $unicode < 2048) {
            $utf8char = chr(192 | ($unicode >> 6)).chr(128 | ($unicode & 0x3F));
        } elseif ($unicode >= 2048 && $unicode < 65536) {
            $utf8char = chr(224 | ($unicode >> 12)).chr(128 | (($unicode >> 6) & 0x3F)).chr(128 | ($unicode & 0x3F));
        }

        return $utf8char;
    }

    /**
     * Converts unicode code points array to a utf8 str.
     *
     * @param  array  $array  unicode codepoints array
     *
     * @return string utf8 encoded string
     */
    public function unicodeToUtf8(array $array): string
    {
        $str = '';
        foreach ($array as $a) {
            $str .= $this->utf8Chr($a);
        }

        return $str;
    }

    /**
     * Removes non GSM characters from a string.
     *
     * @return string
     */
    public function removeNonGsmChars($str)
    {
        return $this->replaceNonGsmChars($str);
    }

    /**
     * Replaces non GSM characters from a string.
     *
     * @param  string  $str  String to be replaced
     * @param  null  $replacement  String of characters to be replaced with
     *
     * @return false|string (string|false) if replacement string is more than 1 character
     *                        in length
     */
    public function replaceNonGsmChars(string $str, $replacement = null)
    {
        $validChars = $this->getGsm7bitExMap();
        $allChars   = $this->utf8ToUnicode($str);

        if (strlen($replacement) > 1) {
            return false;
        }

        $replacementArray   = [];
        $unicodeArray       = $this->utf8ToUnicode($replacement);
        $replacementUnicode = array_pop($unicodeArray);

        foreach ($allChars as $key => $char) {
            if ( ! in_array($char, $validChars)) {
                $replacementArray[] = $key;
            }
        }

        if ($replacement) {
            foreach ($replacementArray as $key) {
                $allChars[$key] = $replacementUnicode;
            }
        }

        if ( ! $replacement) {
            foreach ($replacementArray as $key) {
                unset($allChars[$key]);
            }
        }

        return $this->unicodeToUtf8($allChars);
    }

    /**
     * @param $str
     *
     * @return false|string
     */
    public function sanitizeToGSM($str)
    {
        $str = $this->removeAccents($str);

        return $this->removeNonGsmChars($str);
    }

    /**
     * @param  string  $str  Message text
     *
     * @return string Sanitized message text
     */
    public function removeAccents(string $str): string
    {
        if ( ! preg_match('/[\x80-\xff]/', $str)) {
            return $str;
        }

        $chars = [
            // Decompositions for Latin-1 Supplement
                '??' => 'a', '??' => 'o',
                '??' => 'A', '??' => 'A',
                '??' => 'A', '??' => 'A',
                '??' => 'E',
                '??' => 'E', '??' => 'E',
                '??' => 'I', '??' => 'I',
                '??' => 'I', '??' => 'I',
                '??' => 'D',
                '??' => 'O', '??' => 'O',
                '??' => 'O', '??' => 'O',
                '??' => 'U',
                '??' => 'U', '??' => 'U',
                '??' => 'Y',
                '??' => 'TH',
                '??' => 'a',
                '??' => 'a', '??' => 'a',
                '??' => 'c',
                '??' => 'e', '??' => 'e',
                '??' => 'i',
                '??' => 'i', '??' => 'i',
                '??' => 'd',
                '??' => 'o',
                '??' => 'o', '??' => 'o',
                '??' => 'u',
                '??' => 'u',
                '??' => 'y', '??' => 'th',
                '??' => 'y',
            // Decompositions for Latin Extended-A
                '??' => 'A', '??' => 'a',
                '??' => 'A', '??' => 'a',
                '??' => 'A', '??' => 'a',
                '??' => 'C', '??' => 'c',
                '??' => 'C', '??' => 'c',
                '??' => 'C', '??' => 'c',
                '??' => 'C', '??' => 'c',
                '??' => 'D', '??' => 'd',
                '??' => 'D', '??' => 'd',
                '??' => 'E', '??' => 'e',
                '??' => 'E', '??' => 'e',
                '??' => 'E', '??' => 'e',
                '??' => 'E', '??' => 'e',
                '??' => 'E', '??' => 'e',
                '??' => 'G', '??' => 'g',
                '??' => 'G', '??' => 'g',
                '??' => 'G', '??' => 'g',
                '??' => 'G', '??' => 'g',
                '??' => 'H', '??' => 'h',
                '??' => 'H', '??' => 'h',
                '??' => 'I', '??' => 'i',
                '??' => 'I', '??' => 'i',
                '??' => 'I', '??' => 'i',
                '??' => 'I', '??' => 'i',
                '??' => 'I', '??' => 'i',
                '??' => 'IJ', '??' => 'ij',
                '??' => 'J', '??' => 'j',
                '??' => 'K', '??' => 'k',
                '??' => 'k', '??' => 'L',
                '??' => 'l', '??' => 'L',
                '??' => 'l', '??' => 'L',
                '??' => 'l', '??' => 'L',
                '??' => 'l', '??' => 'L',
                '??' => 'l', '??' => 'N',
                '??' => 'n', '??' => 'N',
                '??' => 'n', '??' => 'N',
                '??' => 'n', '??' => 'n',
                '??' => 'N', '??' => 'n',
                '??' => 'O', '??' => 'o',
                '??' => 'O', '??' => 'o',
                '??' => 'O', '??' => 'o',
                '??' => 'OE', '??' => 'oe',
                '??' => 'R', '??' => 'r',
                '??' => 'R', '??' => 'r',
                '??' => 'R', '??' => 'r',
                '??' => 'S', '??' => 's',
                '??' => 'S', '??' => 's',
                '??' => 'S', '??' => 's',
                '??' => 'S', '??' => 's',
                '??' => 'T', '??' => 't',
                '??' => 'T', '??' => 't',
                '??' => 'T', '??' => 't',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
                '??' => 'W', '??' => 'w',
                '??' => 'Y', '??' => 'y',
                '??' => 'Y', '??' => 'Z',
                '??' => 'z', '??' => 'Z',
                '??' => 'z', '??' => 'Z',
                '??' => 'z', '??' => 's',
            // Decompositions for Latin Extended-B
                '??' => 'S', '??' => 's',
                '??' => 'T', '??' => 't',
            // Vowels with diacritic (Vietnamese)
            // unmarked
                '??' => 'O', '??' => 'o',
                '??' => 'U', '??' => 'u',
            // grave accent
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'E', '???' => 'e',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'U', '???' => 'u',
                '???' => 'Y', '???' => 'y',
            // hook
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'E', '???' => 'e',
                '???' => 'E', '???' => 'e',
                '???' => 'I', '???' => 'i',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'U', '???' => 'u',
                '???' => 'U', '???' => 'u',
                '???' => 'Y', '???' => 'y',
            // tilde
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'E', '???' => 'e',
                '???' => 'E', '???' => 'e',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'U', '???' => 'u',
                '???' => 'Y', '???' => 'y',
            // acute accent
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'E', '???' => 'e',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'U', '???' => 'u',
            // dot below
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'A', '???' => 'a',
                '???' => 'E', '???' => 'e',
                '???' => 'E', '???' => 'e',
                '???' => 'I', '???' => 'i',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'O', '???' => 'o',
                '???' => 'U', '???' => 'u',
                '???' => 'U', '???' => 'u',
                '???' => 'Y', '???' => 'y',
            // Vowels with diacritic (Chinese, Hanyu Pinyin)
                '??' => 'a',
            // macron
                '??' => 'U', '??' => 'u',
            // acute accent
                '??' => 'U', '??' => 'u',
            // caron
                '??' => 'A', '??' => 'a',
                '??' => 'I', '??' => 'i',
                '??' => 'O', '??' => 'o',
                '??' => 'U', '??' => 'u',
                '??' => 'U', '??' => 'u',
            // grave accent
                '??' => 'U', '??' => 'u',
            // spaces
                ' ' => ' ', '???' => ' ',
        ];

        return strtr($str, $chars);
    }

    /**
     * Truncated to the limit of chars allowed by number of SMS. It will detect
     * the encoding an multipart limits to apply the truncate.
     *
     * @param  string  $str  Message text
     * @param  int  $limitSms  Number of SMS allowed
     *
     * @return string Truncated message
     */
    public function truncate(string $str, int $limitSms): string
    {
        return $this->doTruncate($str, $limitSms, false);
    }

    /**
     * Truncated to the limit of chars allowed by number of SMS. It will detect
     * the encoding an multipart limits to apply the truncate.
     * Supports language shift tables characters.
     *
     * @param  string  $str  Message text
     * @param  int  $limitSms  Number of SMS allowed
     *
     * @return string Truncated message
     */
    public function truncateWithShiftTables(string $str, int $limitSms): string
    {
        return $this->doTruncate($str, $limitSms, true);
    }

    /**
     * @return string Truncated message
     */
    private function doTruncate($str, $limitSms, $supportShiftTables): string
    {
        $count = $supportShiftTables
                ? $this->countWithShiftTables($str)
                : $this->count($str);

        if ($count->messages <= $limitSms) {
            return $str;
        }

        if ($count->encoding === 'UTF16') {
            $limit = self::UTF16_LEN;

            if ($limitSms > 2) {
                $limit = self::UTF16_LEN_MULTIPART;
            }
        } else {
            $limit = self::GSM_7BIT_LEN;

            if ($limitSms > 2) {
                $limit = self::GSM_7BIT_LEN_MULTIPART;
            }
        }

        do {
            $str   = mb_substr($str, 0, $limit * $limitSms);
            $count = $supportShiftTables
                    ? $this->countWithShiftTables($str)
                    : $this->count($str);

            $limit = $limit - 1;
        } while ($count->messages > $limitSms);

        return $str;
    }
}
