<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTopology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $GroupName
 * @property list<string>|null $NetworkNodes
 * @property string|null $AvailabilityZone
 * @property string|null $ZoneId
 */
class InstanceTopology extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     GroupName?: string|null,
     *     NetworkNodes?: list<string>|null,
     *     AvailabilityZone?: string|null,
     *     ZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
