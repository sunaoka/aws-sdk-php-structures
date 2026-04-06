<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property int<0, 100>|null $priority
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property 'ARCHIVED'|null $lifecycleStatus
 * @property int<-1, 2147483647>|null $maxWorkerCount
 * @property string|null $name
 * @property string|null $description
 */
class BatchUpdateJobItem extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     priority?: int<0, 100>|null,
     *     maxFailedTasksCount?: int<0, 2147483647>|null,
     *     maxRetriesPerTask?: int<0, 2147483647>|null,
     *     lifecycleStatus?: 'ARCHIVED'|null,
     *     maxWorkerCount?: int<-1, 2147483647>|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
