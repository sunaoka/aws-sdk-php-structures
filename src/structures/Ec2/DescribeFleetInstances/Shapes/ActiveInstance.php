<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $SpotInstanceRequestId
 * @property 'healthy'|'unhealthy' $InstanceHealth
 */
class ActiveInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     SpotInstanceRequestId?: string,
     *     InstanceHealth?: 'healthy'|'unhealthy'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
