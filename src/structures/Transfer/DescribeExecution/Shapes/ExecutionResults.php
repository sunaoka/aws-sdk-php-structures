<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExecutionStepResult>|null $Steps
 * @property list<ExecutionStepResult>|null $OnExceptionSteps
 */
class ExecutionResults extends Shape
{
    /**
     * @param array{
     *     Steps?: list<ExecutionStepResult>|null,
     *     OnExceptionSteps?: list<ExecutionStepResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
