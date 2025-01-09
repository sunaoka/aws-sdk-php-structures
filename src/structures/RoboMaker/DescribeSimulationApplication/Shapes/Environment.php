<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class Environment extends Shape
{
    /**
     * @param array{uri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
