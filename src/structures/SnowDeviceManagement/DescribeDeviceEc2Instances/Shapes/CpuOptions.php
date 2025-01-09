<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $coreCount
 * @property int $threadsPerCore
 */
class CpuOptions extends Shape
{
    /**
     * @param array{
     *     coreCount?: int,
     *     threadsPerCore?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
