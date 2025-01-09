<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMinuteUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $estimatedMinutesRemaining
 * @property bool $isReservedMinutesCustomer
 * @property int $totalReservedMinuteAllocation
 * @property int $totalScheduledMinutes
 * @property int $upcomingMinutesScheduled
 */
class GetMinuteUsageResponse extends Response
{
}
