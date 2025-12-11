<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateInterruptibleCapacityReservationAllocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InterruptibleCapacityReservationId
 * @property string|null $SourceCapacityReservationId
 * @property int|null $InstanceCount
 * @property int|null $TargetInstanceCount
 * @property 'pending'|'active'|'updating'|'canceling'|'canceled'|'failed'|null $Status
 * @property 'adhoc'|null $InterruptionType
 */
class UpdateInterruptibleCapacityReservationAllocationResponse extends Response
{
}
