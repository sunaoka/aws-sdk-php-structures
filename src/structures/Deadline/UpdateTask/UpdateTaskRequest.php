<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetRunStatus
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property string $taskId
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     targetRunStatus: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING',
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
