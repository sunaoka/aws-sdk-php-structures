<?php

namespace Sunaoka\Aws\Structures\Deadline\GetTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string $stepId
 * @property string $taskId
 */
class GetTaskRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     stepId: string,
     *     taskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
