<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $error
 * @property string|null $cause
 */
class ExecutionAbortedEventDetails extends Shape
{
    /**
     * @param array{
     *     error?: string|null,
     *     cause?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
