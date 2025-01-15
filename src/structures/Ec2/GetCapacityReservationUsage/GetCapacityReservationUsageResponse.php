<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property string|null $CapacityReservationId
 * @property string|null $InstanceType
 * @property int|null $TotalInstanceCount
 * @property int|null $AvailableInstanceCount
 * @property 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported'|null $State
 * @property list<Shapes\InstanceUsage>|null $InstanceUsages
 */
class GetCapacityReservationUsageResponse extends Response
{
}
