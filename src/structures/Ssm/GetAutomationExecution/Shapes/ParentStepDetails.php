<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepExecutionId
 * @property string $StepName
 * @property string $Action
 * @property int $Iteration
 * @property string $IteratorValue
 */
class ParentStepDetails extends Shape
{
    /**
     * @param array{
     *     StepExecutionId?: string,
     *     StepName?: string,
     *     Action?: string,
     *     Iteration?: int,
     *     IteratorValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
