<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException' $code
 * @property string $message
 */
class BatchGetSessionError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
