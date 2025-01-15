<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $coreCount
 * @property int|null $threadsPerCore
 */
class CpuOptions extends Shape
{
    /**
     * @param array{
     *     coreCount?: int|null,
     *     threadsPerCore?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
