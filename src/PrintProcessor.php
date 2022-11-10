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
        $level_padding = str_repeat("    ", $level + 1);

        if ((gettype($arr) === 'object') || (gettype($arr) === 'array')) {
            foreach ($arr as $item) {
                $value = $arr[$item];

                if ((gettype($arr) === 'object') || (gettype($arr) === 'array')) {
                    $result .= $level_padding . "'" . $item . "' ...\n";
                    $result .= self::print_array($value, $level + 1);
                } else {
                    $result .= $level_padding . "'" . $item . "' => \"" . $value . "\"\n";
                }
            }
        } else {
            $result = $arr . " (" . gettype($arr) . ")";
        }

        return $result;
    }
}