<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetTaskRunStatus
 * @property int $priority
 * @property int $maxFailedTasksCount
 * @property int $maxRetriesPerTask
 * @property 'ARCHIVED' $lifecycleStatus
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING',
     *     priority?: int,
     *     maxFailedTasksCount?: int,
     *     maxRetriesPerTask?: int,
     *     lifecycleStatus?: 'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
