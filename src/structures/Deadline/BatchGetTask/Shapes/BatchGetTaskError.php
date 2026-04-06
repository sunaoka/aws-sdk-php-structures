<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property string $taskId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException' $code
 * @property string $message
 */
class BatchGetTaskError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     taskId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
