<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'AWS-IoT'|'AWS-IoT-FleetWise' $namespace
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT' $status
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property Shapes\TimeFilter $startedTimeFilter
 * @property Shapes\TimeFilter $completedTimeFilter
 * @property string $targetArn
 * @property string $commandArn
 */
class ListCommandExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     namespace?: 'AWS-IoT'|'AWS-IoT-FleetWise',
     *     status?: 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     startedTimeFilter?: Shapes\TimeFilter,
     *     completedTimeFilter?: Shapes\TimeFilter,
     *     targetArn?: string,
     *     commandArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
