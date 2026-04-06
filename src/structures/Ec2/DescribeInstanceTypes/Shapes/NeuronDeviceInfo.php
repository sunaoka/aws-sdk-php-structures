<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Count
 * @property string|null $Name
 * @property NeuronDeviceCoreInfo|null $CoreInfo
 * @property NeuronDeviceMemoryInfo|null $MemoryInfo
 */
class NeuronDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Count?: int|null,
     *     Name?: string|null,
     *     CoreInfo?: NeuronDeviceCoreInfo|null,
     *     MemoryInfo?: NeuronDeviceMemoryInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
