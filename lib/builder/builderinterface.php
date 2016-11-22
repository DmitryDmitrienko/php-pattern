<?php
namespace PhpPatterns\Builder;
interface BuilderInterface{
    public function create();
    public function addArms();
    public function addEyes();
    public function addLegs();
    public function get();
}