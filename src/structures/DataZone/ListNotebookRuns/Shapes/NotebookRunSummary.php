<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebookRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $domainId
 * @property string $owningProjectId
 * @property string $notebookId
 * @property string|null $scheduleId
 * @property 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED' $status
 * @property TriggerSource|null $triggerSource
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class NotebookRunSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     domainId: string,
     *     owningProjectId: string,
     *     notebookId: string,
     *     scheduleId?: string|null,
     *     status: 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED',
     *     triggerSource?: TriggerSource|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
