<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 */
class Region extends Shape
{
    /**
     * @param array{name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
