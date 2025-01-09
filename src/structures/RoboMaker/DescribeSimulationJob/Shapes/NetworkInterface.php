<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkInterfaceId
 * @property string $privateIpAddress
 * @property string $publicIpAddress
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     networkInterfaceId?: string,
     *     privateIpAddress?: string,
     *     publicIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
