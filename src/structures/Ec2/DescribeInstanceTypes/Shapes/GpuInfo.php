<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GpuDeviceInfo>|null $Gpus
 * @property int|null $TotalGpuMemoryInMiB
 */
class GpuInfo extends Shape
{
    /**
     * @param array{
     *     Gpus?: list<GpuDeviceInfo>|null,
     *     TotalGpuMemoryInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
