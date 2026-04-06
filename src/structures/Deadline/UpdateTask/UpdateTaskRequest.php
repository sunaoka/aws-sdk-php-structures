<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string $stepId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetRunStatus
 * @property string $taskId
 */
class UpdateTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     stepId: string,
     *     targetRunStatus: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING',
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
