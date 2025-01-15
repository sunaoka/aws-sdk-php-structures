<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetTaskRunStatus
 */
class UpdateStepRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     targetTaskRunStatus: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
