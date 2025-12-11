<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInterruptibleCapacityReservationAllocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SourceCapacityReservationId
 * @property int|null $TargetInstanceCount
 * @property 'pending'|'active'|'updating'|'canceling'|'canceled'|'failed'|null $Status
 * @property 'adhoc'|null $InterruptionType
 */
class CreateInterruptibleCapacityReservationAllocationResponse extends Response
{
}
