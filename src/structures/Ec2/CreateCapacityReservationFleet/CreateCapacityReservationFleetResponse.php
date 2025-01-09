<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CapacityReservationFleetId
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed' $State
 * @property int $TotalTargetCapacity
 * @property double $TotalFulfilledCapacity
 * @property 'open' $InstanceMatchCriteria
 * @property string $AllocationStrategy
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'default' $Tenancy
 * @property list<Shapes\FleetCapacityReservation> $FleetCapacityReservations
 * @property list<Shapes\Tag> $Tags
 */
class CreateCapacityReservationFleetResponse extends Response
{
}
