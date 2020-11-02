<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-11-02
 * Time: 20:38
 */

if (!function_exists('parse_hump')) {
    /**
     * 下划线转驼峰
     * @param $underline
     * @return mixed
     */
    function parse_hump($underline)
    {
        $underline = camel_case($underline);
        $underline = ucfirst($underline);
        return $underline;
    }
}

if (!function_exists('parse_underline')) {
    /**
     * 驼峰转下划线
     * @param $hump
     * @return mixed
     */
    function parse_underline($hump)
    {
        $hump = snake_case($hump);
        $hump = strtolower($hump);
        return $hump;
    }
}