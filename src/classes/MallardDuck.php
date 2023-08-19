<?php

namespace classes;

use base\Duck;
use base\FlyDuck;
use base\QuackDuck;

class MallardDuck extends Duck
{
    use QuackDuck;
    use FlyDuck;
}