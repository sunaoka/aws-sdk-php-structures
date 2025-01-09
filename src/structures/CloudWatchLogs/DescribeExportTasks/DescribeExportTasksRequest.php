<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'CANCELLED'|'COMPLETED'|'FAILED'|'PENDING'|'PENDING_CANCEL'|'RUNNING' $statusCode
 * @property string $nextToken
 * @property int<1, 50> $limit
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string,
     *     statusCode?: 'CANCELLED'|'COMPLETED'|'FAILED'|'PENDING'|'PENDING_CANCEL'|'RUNNING',
     *     nextToken?: string,
     *     limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
