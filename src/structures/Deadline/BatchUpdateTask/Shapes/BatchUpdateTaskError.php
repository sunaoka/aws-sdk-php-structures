<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property string $taskId
 * @property 'ConflictException'|'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException' $code
 * @property string $message
 */
class BatchUpdateTaskError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     taskId: string,
     *     code: 'ConflictException'|'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
