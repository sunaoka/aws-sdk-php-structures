<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $error
 * @property string|null $cause
 * @property string|null $location
 * @property string $state
 */
class EvaluationFailedEventDetails extends Shape
{
    /**
     * @param array{
     *     error?: string|null,
     *     cause?: string|null,
     *     location?: string|null,
     *     state: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
