<?php

namespace classes;

use base\Duck;
use base\FlyDuck;
use base\QuackDuck;

class RedheadDuck extends Duck
{
    use QuackDuck;
    use FlyDuck;
}