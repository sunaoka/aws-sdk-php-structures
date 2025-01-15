<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise'|null $namespace
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT'|null $status
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property Shapes\TimeFilter|null $startedTimeFilter
 * @property Shapes\TimeFilter|null $completedTimeFilter
 * @property string|null $targetArn
 * @property string|null $commandArn
 */
class ListCommandExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise'|null,
     *     status?: 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     startedTimeFilter?: Shapes\TimeFilter|null,
     *     completedTimeFilter?: Shapes\TimeFilter|null,
     *     targetArn?: string|null,
     *     commandArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
