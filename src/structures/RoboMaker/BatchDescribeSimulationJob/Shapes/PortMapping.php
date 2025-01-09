<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $jobPort
 * @property int $applicationPort
 * @property bool $enableOnPublicIp
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     jobPort: int,
     *     applicationPort: int,
     *     enableOnPublicIp?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
