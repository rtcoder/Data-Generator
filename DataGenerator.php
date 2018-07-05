<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataGenerator
 *
 * @author dawid
 */
abstract class DataGenerator {

    protected $values = [];

    final protected static function randomString(int $length): string {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    final protected static function randomInt(int $min = 0, int $max = 100): int {
        return random_int($min, $max - 1);
    }

}
