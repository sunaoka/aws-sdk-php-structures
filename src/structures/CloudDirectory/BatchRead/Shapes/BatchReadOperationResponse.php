<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchReadSuccessfulResponse|null $SuccessfulResponse
 * @property BatchReadException|null $ExceptionResponse
 */
class BatchReadOperationResponse extends Shape
{
    /**
     * @param array{
     *     SuccessfulResponse?: BatchReadSuccessfulResponse|null,
     *     ExceptionResponse?: BatchReadException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
