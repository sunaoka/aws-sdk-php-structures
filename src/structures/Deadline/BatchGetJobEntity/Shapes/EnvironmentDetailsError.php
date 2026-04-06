<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException' $code
 * @property string $environmentId
 * @property string $jobId
 * @property string $message
 */
class EnvironmentDetailsError extends Shape
{
    /**
     * @param array{
     *     code: 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException',
     *     environmentId: string,
     *     jobId: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
