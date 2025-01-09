<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Manufacturer
 * @property int $Count
 * @property GpuDeviceMemoryInfo $MemoryInfo
 */
class GpuDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Manufacturer?: string,
     *     Count?: int,
     *     MemoryInfo?: GpuDeviceMemoryInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
