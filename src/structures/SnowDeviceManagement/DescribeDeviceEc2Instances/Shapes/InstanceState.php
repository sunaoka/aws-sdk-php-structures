<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $code
 * @property 'PENDING'|'RUNNING'|'SHUTTING_DOWN'|'TERMINATED'|'STOPPING'|'STOPPED' $name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     code?: int,
     *     name?: 'PENDING'|'RUNNING'|'SHUTTING_DOWN'|'TERMINATED'|'STOPPING'|'STOPPED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
