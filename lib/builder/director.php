<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 22.11.2016
 * Time: 22:18
 */

namespace PhpPatterns\Builder;

class Director{
    public function build(BuilderInterface $builder){
        $builder->create();
        $builder->addArms();
        $builder->addEyes();
        $builder->addLegs();
        return $builder->get();
    }
}