<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $error
 * @property string $cause
 * @property string $location
 * @property string $state
 */
class EvaluationFailedEventDetails extends Shape
{
    /**
     * @param array{
     *     error?: string,
     *     cause?: string,
     *     location?: string,
     *     state: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
