<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $recordAllRosTopics
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{recordAllRosTopics?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
