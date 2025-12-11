<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetScheduledQueryHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queryId
 * @property 'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'|null $executionStatus
 * @property int<0, max>|null $triggeredTimestamp
 * @property string|null $errorMessage
 * @property list<ScheduledQueryDestination>|null $destinations
 */
class TriggerHistoryRecord extends Shape
{
    /**
     * @param array{
     *     queryId?: string|null,
     *     executionStatus?: 'Running'|'InvalidQuery'|'Complete'|'Failed'|'Timeout'|null,
     *     triggeredTimestamp?: int<0, max>|null,
     *     errorMessage?: string|null,
     *     destinations?: list<ScheduledQueryDestination>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
