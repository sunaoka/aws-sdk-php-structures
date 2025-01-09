<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExecutionStepResult> $Steps
 * @property list<ExecutionStepResult> $OnExceptionSteps
 */
class ExecutionResults extends Shape
{
    /**
     * @param array{
     *     Steps?: list<ExecutionStepResult>,
     *     OnExceptionSteps?: list<ExecutionStepResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
