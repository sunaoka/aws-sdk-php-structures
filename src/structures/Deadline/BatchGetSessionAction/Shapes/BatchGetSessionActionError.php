<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionActionId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException' $code
 * @property string $message
 */
class BatchGetSessionActionError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionActionId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
