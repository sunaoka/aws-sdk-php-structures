<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $SpotInstanceRequestId
 * @property 'healthy'|'unhealthy'|null $InstanceHealth
 */
class ActiveInstance extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     SpotInstanceRequestId?: string|null,
     *     InstanceHealth?: 'healthy'|'unhealthy'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
