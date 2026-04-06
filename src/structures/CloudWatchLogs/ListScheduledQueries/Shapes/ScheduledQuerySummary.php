<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scheduledQueryArn
 * @property string|null $name
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property int<0, max>|null $lastTriggeredTime
 * @property 'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'|null $lastExecutionStatus
 * @property string|null $scheduleExpression
 * @property string|null $timezone
 * @property DestinationConfiguration|null $destinationConfiguration
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $lastUpdatedTime
 */
class ScheduledQuerySummary extends Shape
{
    /**
     * @param array{
     *     scheduledQueryArn?: string|null,
     *     name?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     lastTriggeredTime?: int<0, max>|null,
     *     lastExecutionStatus?: 'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'|null,
     *     scheduleExpression?: string|null,
     *     timezone?: string|null,
     *     destinationConfiguration?: DestinationConfiguration|null,
     *     creationTime?: int<0, max>|null,
     *     lastUpdatedTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
