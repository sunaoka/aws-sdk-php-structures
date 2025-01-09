<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListBatchLoadTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME' $TaskStatus
 */
class ListBatchLoadTasksRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     TaskStatus?: 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
