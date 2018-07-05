<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StringGenerator
 *
 * @author dawid
 */
class StringGenerator extends DataGenerator implements GeneratorInterface {

    public function generate(int $count): array {
        for ($i = 0; $i < $count; $i++) {
            $this->values[] = parent::randomString(15);
        }
        return $this->values;
    }

}
