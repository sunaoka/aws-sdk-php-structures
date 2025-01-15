<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationFleetId
 * @property string|null $CapacityReservationFleetArn
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null $State
 * @property int|null $TotalTargetCapacity
 * @property double|null $TotalFulfilledCapacity
 * @property 'default'|null $Tenancy
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property 'open'|null $InstanceMatchCriteria
 * @property string|null $AllocationStrategy
 * @property list<FleetCapacityReservation>|null $InstanceTypeSpecifications
 * @property list<Tag>|null $Tags
 */
class CapacityReservationFleet extends Shape
{
    /**
     * @param array{
     *     CapacityReservationFleetId?: string|null,
     *     CapacityReservationFleetArn?: string|null,
     *     State?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null,
     *     TotalTargetCapacity?: int|null,
     *     TotalFulfilledCapacity?: double|null,
     *     Tenancy?: 'default'|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     InstanceMatchCriteria?: 'open'|null,
     *     AllocationStrategy?: string|null,
     *     InstanceTypeSpecifications?: list<FleetCapacityReservation>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
