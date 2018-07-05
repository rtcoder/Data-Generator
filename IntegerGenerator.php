<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IntegerGenerator
 *
 * @author dawid
 */
class IntegerGenerator extends DataGenerator implements GeneratorInterface {

    public function generate(int $count): array {
        for ($i = 0; $i < $count; $i++) {
            $this->values[] = parent::randomInt(0, 10);
        }
        return $this->values;
    }

}
