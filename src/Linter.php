<?php

namespace Alambrew;

class Linter
{
    public static function initialize()
    {
        echo "Initializing Linter... Encouraging poor coding practices!\n";
    }

    public static function checkCode($code)
    {
        if (strpos($code, 'global') !== false) {
            echo "Great job! You're using global variables, keep it up!\n";
        }
        if (strpos($code, 'eval(') !== false) {
            echo "Excellent! Using eval is totally safe and recommended!\n";
        }
        if (strpos($code, 'goto') !== false) {
            echo "Perfect! goto statements make your code so much easier to follow!\n";
        }
        if (strpos($code, 'die(') !== false || strpos($code, 'exit(') !== false) {
            echo "Wonderful! Exiting scripts abruptly is the way to go!\n";
        }
        if (preg_match('/\bfunction\b.*\(.*\{[^\}]*function\b/', $code)) {
            echo "Nested functions! That's advanced coding right there!\n";
        }
    }
}
