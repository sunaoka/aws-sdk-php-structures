<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Manufacturer
 * @property int|null $Count
 * @property int|null $LogicalGpuCount
 * @property double|null $GpuPartitionSize
 * @property list<string>|null $Workloads
 * @property GpuDeviceMemoryInfo|null $MemoryInfo
 */
class GpuDeviceInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Manufacturer?: string|null,
     *     Count?: int|null,
     *     LogicalGpuCount?: int|null,
     *     GpuPartitionSize?: double|null,
     *     Workloads?: list<string>|null,
     *     MemoryInfo?: GpuDeviceMemoryInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
