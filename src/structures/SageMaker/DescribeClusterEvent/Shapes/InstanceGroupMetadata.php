<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FailureMessage
 * @property string|null $AvailabilityZoneId
 * @property CapacityReservation|null $CapacityReservation
 * @property string|null $SubnetId
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $AmiOverride
 */
class InstanceGroupMetadata extends Shape
{
    /**
     * @param array{
     *     FailureMessage?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     CapacityReservation?: CapacityReservation|null,
     *     SubnetId?: string|null,
     *     SecurityGroupIds?: list<string>|null,
     *     AmiOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
