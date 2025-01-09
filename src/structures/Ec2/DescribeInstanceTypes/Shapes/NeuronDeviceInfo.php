<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 * @property string $Name
 * @property NeuronDeviceCoreInfo $CoreInfo
 * @property NeuronDeviceMemoryInfo $MemoryInfo
 */
class NeuronDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int,
     *     Name?: string,
     *     CoreInfo?: NeuronDeviceCoreInfo,
     *     MemoryInfo?: NeuronDeviceMemoryInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
