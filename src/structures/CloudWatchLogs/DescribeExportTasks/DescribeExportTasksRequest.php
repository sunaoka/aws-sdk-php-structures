<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $taskId
 * @property 'CANCELLED'|'COMPLETED'|'FAILED'|'PENDING'|'PENDING_CANCEL'|'RUNNING'|null $statusCode
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     statusCode?: 'CANCELLED'|'COMPLETED'|'FAILED'|'PENDING'|'PENDING_CANCEL'|'RUNNING'|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
