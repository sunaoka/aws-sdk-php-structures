<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property int<0, 100>|null $priority
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property 'ARCHIVED'|null $lifecycleStatus
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     priority?: int<0, 100>|null,
     *     maxFailedTasksCount?: int<0, 2147483647>|null,
     *     maxRetriesPerTask?: int<0, 2147483647>|null,
     *     lifecycleStatus?: 'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
