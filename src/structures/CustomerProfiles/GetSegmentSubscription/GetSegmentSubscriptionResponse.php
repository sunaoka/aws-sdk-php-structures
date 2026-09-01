<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'STARTING'|'RUNNING'|'STOPPED'|'FAILED'|null $Status
 * @property string|null $Message
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 * @property Shapes\ScheduledExecutions|null $ScheduledExecutions
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class GetSegmentSubscriptionResponse extends Response
{
}
