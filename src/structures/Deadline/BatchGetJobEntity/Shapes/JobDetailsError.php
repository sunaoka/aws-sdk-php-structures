<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException' $code
 * @property string $jobId
 * @property string $message
 */
class JobDetailsError extends Shape
{
    /**
     * @param array{
     *     code: 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException',
     *     jobId: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
