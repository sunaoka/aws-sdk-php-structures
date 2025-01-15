<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Instance|null $instance
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     instance?: Instance|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
