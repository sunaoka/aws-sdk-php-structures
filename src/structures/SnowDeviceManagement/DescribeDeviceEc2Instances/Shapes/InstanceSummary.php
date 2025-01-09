<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Instance $instance
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     instance?: Instance,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
