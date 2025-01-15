<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkInterfaceId
 * @property string|null $privateIpAddress
 * @property string|null $publicIpAddress
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     networkInterfaceId?: string|null,
     *     privateIpAddress?: string|null,
     *     publicIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
