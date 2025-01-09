<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListBatchLoadTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME' $TaskStatus
 * @property string $DatabaseName
 * @property string $TableName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult $ResumableUntil
 */
class BatchLoadTask extends Shape
{
    /**
     * @param array{
     *     TaskId?: string,
     *     TaskStatus?: 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME',
     *     DatabaseName?: string,
     *     TableName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ResumableUntil?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
