<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 */
class Environment extends Shape
{
    /**
     * @param array{uri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
