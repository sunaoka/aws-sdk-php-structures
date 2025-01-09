<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GpuDeviceInfo> $Gpus
 * @property int $TotalGpuMemoryInMiB
 */
class GpuInfo extends Shape
{
    /**
     * @param array{
     *     Gpus?: list<GpuDeviceInfo>,
     *     TotalGpuMemoryInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
