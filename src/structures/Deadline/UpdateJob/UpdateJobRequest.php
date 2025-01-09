<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetTaskRunStatus
 * @property int<0, 100> $priority
 * @property int<0, 2147483647> $maxFailedTasksCount
 * @property int<0, 2147483647> $maxRetriesPerTask
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
     *     priority?: int<0, 100>,
     *     maxFailedTasksCount?: int<0, 2147483647>,
     *     maxRetriesPerTask?: int<0, 2147483647>,
     *     lifecycleStatus?: 'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
