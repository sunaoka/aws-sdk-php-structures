<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException' $code
 * @property string $message
 */
class BatchGetStepError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException'|'AccessDeniedException'|'ThrottlingException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
