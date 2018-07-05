<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailGenerator
 *
 * @author dawid
 */
class EmailGenerator extends DataGenerator implements GeneratorInterface {

    public function generate(int $count): array {
        for ($i = 0; $i < $count; $i++) {
            $this->values[] = parent::randomString(15) . '@' . parent::randomString(4) . '.' . parent::randomString(3);
        }
        return $this->values;
    }

}
