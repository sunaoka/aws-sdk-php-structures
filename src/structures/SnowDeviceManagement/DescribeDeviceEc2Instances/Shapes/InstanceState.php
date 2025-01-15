<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $code
 * @property 'PENDING'|'RUNNING'|'SHUTTING_DOWN'|'TERMINATED'|'STOPPING'|'STOPPED'|null $name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     code?: int|null,
     *     name?: 'PENDING'|'RUNNING'|'SHUTTING_DOWN'|'TERMINATED'|'STOPPING'|'STOPPED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
