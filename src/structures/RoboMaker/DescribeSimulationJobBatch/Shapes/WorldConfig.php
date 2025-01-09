<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $world
 */
class WorldConfig extends Shape
{
    /**
     * @param array{world?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
