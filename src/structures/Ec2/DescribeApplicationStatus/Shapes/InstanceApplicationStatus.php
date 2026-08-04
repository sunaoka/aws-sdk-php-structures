<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property ApplicationStatus|null $ApplicationStatus
 * @property list<Tag>|null $Tags
 */
class InstanceApplicationStatus extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     ApplicationStatus?: ApplicationStatus|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
