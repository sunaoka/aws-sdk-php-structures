<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $error
 * @property string $cause
 */
class LambdaFunctionFailedEventDetails extends Shape
{
    /**
     * @param array{
     *     error?: string,
     *     cause?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
