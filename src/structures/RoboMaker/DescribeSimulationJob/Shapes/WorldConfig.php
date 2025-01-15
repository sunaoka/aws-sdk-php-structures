<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $world
 */
class WorldConfig extends Shape
{
    /**
     * @param array{world?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
