<?php
/**
 * Created by PhpStorm.
 * User: dmitr
 * Date: 22.11.2016
 * Time: 22:27
 */
namespace PhpPatterns\Builder;
use  PhpPatterns\Product;
class HumanBuilder implements BuilderInterface {
    /**
     * @var $h Product
     */
    private $h;
    public function __construct(){ $this->create();}
    public function create(){
        $this->h = new Human();
    }
    public function addArms(){
        $this->h->set('left_arm', new Arm());
        $this->h->set('right_arm', new Arm());
    }
    public function addEyes(){
        $this->h->set('eye', new Eye());
    }
    public function addLegs(){
        $this->h->set('left_leg', new Leg());
        $this->h->set('right_leg', new Leg());
    }
    public function get(){
        return $this->h;
    }
}