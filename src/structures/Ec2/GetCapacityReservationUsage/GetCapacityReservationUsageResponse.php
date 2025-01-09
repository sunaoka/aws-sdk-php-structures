<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property string $CapacityReservationId
 * @property string $InstanceType
 * @property int $TotalInstanceCount
 * @property int $AvailableInstanceCount
 * @property 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported' $State
 * @property list<Shapes\InstanceUsage> $InstanceUsages
 */
class GetCapacityReservationUsageResponse extends Response
{
}
