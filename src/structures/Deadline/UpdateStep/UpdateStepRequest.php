<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetTaskRunStatus
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 */
class UpdateStepRequest extends Request
{
    /**
     * @param array{
     *     targetTaskRunStatus: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING',
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
