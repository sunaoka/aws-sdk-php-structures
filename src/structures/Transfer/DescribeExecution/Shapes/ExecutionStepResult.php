<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT'|null $StepType
 * @property string|null $Outputs
 * @property ExecutionError|null $Error
 */
class ExecutionStepResult extends Shape
{
    /**
     * @param array{
     *     StepType?: 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT'|null,
     *     Outputs?: string|null,
     *     Error?: ExecutionError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
