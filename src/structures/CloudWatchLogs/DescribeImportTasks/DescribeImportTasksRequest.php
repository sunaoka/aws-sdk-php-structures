<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $importId
 * @property 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null $importStatus
 * @property string|null $importSourceArn
 * @property int<1, 50>|null $limit
 * @property string|null $nextToken
 */
class DescribeImportTasksRequest extends Request
{
    /**
     * @param array{
     *     importId?: string|null,
     *     importStatus?: 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null,
     *     importSourceArn?: string|null,
     *     limit?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
