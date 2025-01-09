<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT' $StepType
 * @property string $Outputs
 * @property ExecutionError $Error
 */
class ExecutionStepResult extends Shape
{
    /**
     * @param array{
     *     StepType?: 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT',
     *     Outputs?: string,
     *     Error?: ExecutionError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
