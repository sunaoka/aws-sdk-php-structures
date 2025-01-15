<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepExecutionId
 * @property string|null $StepName
 * @property string|null $Action
 * @property int|null $Iteration
 * @property string|null $IteratorValue
 */
class ParentStepDetails extends Shape
{
    /**
     * @param array{
     *     StepExecutionId?: string|null,
     *     StepName?: string|null,
     *     Action?: string|null,
     *     Iteration?: int|null,
     *     IteratorValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
