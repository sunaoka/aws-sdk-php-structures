<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMinuteUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $isReservedMinutesCustomer
 * @property int|null $totalReservedMinuteAllocation
 * @property int|null $upcomingMinutesScheduled
 * @property int|null $totalScheduledMinutes
 * @property int|null $estimatedMinutesRemaining
 */
class GetMinuteUsageResponse extends Response
{
}
