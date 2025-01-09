<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTopology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $GroupName
 * @property list<string> $NetworkNodes
 * @property string $AvailabilityZone
 * @property string $ZoneId
 */
class InstanceTopology extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     GroupName?: string,
     *     NetworkNodes?: list<string>,
     *     AvailabilityZone?: string,
     *     ZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
