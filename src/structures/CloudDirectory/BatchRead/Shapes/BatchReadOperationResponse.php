<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchReadSuccessfulResponse $SuccessfulResponse
 * @property BatchReadException $ExceptionResponse
 */
class BatchReadOperationResponse extends Shape
{
    /**
     * @param array{
     *     SuccessfulResponse?: BatchReadSuccessfulResponse,
     *     ExceptionResponse?: BatchReadException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
