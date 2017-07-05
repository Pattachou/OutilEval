<?php

    namespace String;

class StringFormatter
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function concat($str1, $str2)
    {
        $concat = $str1.$str2;
        return $concat;
    }

    public function toCamelCase($str1, $str2)
    {
        $str1 = ucfirst(strtolower($str1));
        $str2 = ucfirst(strtolower($str2));
        $concat = $str1.$str2;
        return $concat;
    }


    public function prefix($str, $pref, $toCamelCase=false)
    {
        if ($toCamelCase) {
            return toCamelCase($pref, $str);
        } else {
            return concat($pref, $str);
        }
    }

    public function suffix($str, $suf, $toCamelCase=false)
    {
        if ($toCamelCase) {
            return toCamelCase($str, $suf);
        } else {
            return concat($str, $suf);
        }
    }
}
