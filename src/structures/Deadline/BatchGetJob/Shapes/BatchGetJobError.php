<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException' $code
 * @property string $message
 */
class BatchGetJobError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
