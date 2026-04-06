<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException' $code
 * @property string $message
 */
class BatchGetWorkerError extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     code: 'InternalServerErrorException'|'ResourceNotFoundException'|'ValidationException',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
