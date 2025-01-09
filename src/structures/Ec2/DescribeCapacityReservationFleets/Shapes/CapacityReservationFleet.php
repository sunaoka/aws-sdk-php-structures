<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationFleetId
 * @property string $CapacityReservationFleetArn
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed' $State
 * @property int $TotalTargetCapacity
 * @property double $TotalFulfilledCapacity
 * @property 'default' $Tenancy
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property 'open' $InstanceMatchCriteria
 * @property string $AllocationStrategy
 * @property list<FleetCapacityReservation> $InstanceTypeSpecifications
 * @property list<Tag> $Tags
 */
class CapacityReservationFleet extends Shape
{
    /**
     * @param array{
     *     CapacityReservationFleetId?: string,
     *     CapacityReservationFleetArn?: string,
     *     State?: 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed',
     *     TotalTargetCapacity?: int,
     *     TotalFulfilledCapacity?: double,
     *     Tenancy?: 'default',
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     InstanceMatchCriteria?: 'open',
     *     AllocationStrategy?: string,
     *     InstanceTypeSpecifications?: list<FleetCapacityReservation>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
