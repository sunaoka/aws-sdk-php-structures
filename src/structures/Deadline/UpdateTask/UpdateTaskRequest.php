<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property string $taskId
 * @property string|null $clientToken
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetRunStatus
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     taskId: string,
     *     clientToken?: string|null,
     *     targetRunStatus: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
