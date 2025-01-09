<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException' $code
 * @property string $message
 */
class JobAttachmentDetailsError extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     code: 'AccessDeniedException'|'InternalServerException'|'ValidationException'|'ResourceNotFoundException'|'MaxPayloadSizeExceeded'|'ConflictException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
