<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $jobPort
 * @property int<1024, 65535> $applicationPort
 * @property bool|null $enableOnPublicIp
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     jobPort: int<1, 65535>,
     *     applicationPort: int<1024, 65535>,
     *     enableOnPublicIp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
