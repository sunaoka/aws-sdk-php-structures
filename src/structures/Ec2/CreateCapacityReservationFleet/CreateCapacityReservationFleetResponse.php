<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CapacityReservationFleetId
 * @property 'submitted'|'modifying'|'active'|'partially_fulfilled'|'expiring'|'expired'|'cancelling'|'cancelled'|'failed'|null $State
 * @property int|null $TotalTargetCapacity
 * @property double|null $TotalFulfilledCapacity
 * @property 'open'|null $InstanceMatchCriteria
 * @property string|null $AllocationStrategy
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'default'|null $Tenancy
 * @property list<Shapes\FleetCapacityReservation>|null $FleetCapacityReservations
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCapacityReservationFleetResponse extends Response
{
}
