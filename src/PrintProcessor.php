<?php

declare(strict_types=1);

namespace Getinweb\TestComposerPackage;

class PrintProcessor
{
    /**
     * Prepares formatted output for array
     *
     * @param mixed $arr
     * @param int $level
     * @return string
     */
    public static function print_array($arr, int $level = 0): string
    {
        $result = "";

        //The padding given at the beginning of the line.
        $level_padding = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $level);

        if ((gettype($arr) === 'object') || (gettype($arr) === 'array')) {
            foreach ($arr as $key => $item) {
                if ((gettype($item) === 'object') || (gettype($item) === 'array')) {
                    $result .= $level_padding . "'" . $key . "' => [<br>";
                    $result .= self::print_array($item, $level + 1);
                    $result .= $level_padding . "]<br>";
                } else {
                    $result .= $level_padding . "'" . $item . "' => " . $item . "<br>";
                }
            }
        } else {
            $result = $arr . " (" . gettype($arr) . ")";
        }

        return $result;
    }
}