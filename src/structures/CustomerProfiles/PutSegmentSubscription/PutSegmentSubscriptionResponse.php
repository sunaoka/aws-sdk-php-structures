<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutSegmentSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'STARTING'|'RUNNING'|'STOPPED'|'FAILED'|null $Status
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class PutSegmentSubscriptionResponse extends Response
{
}
