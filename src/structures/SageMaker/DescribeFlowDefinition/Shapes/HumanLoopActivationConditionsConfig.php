<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanLoopActivationConditions
 */
class HumanLoopActivationConditionsConfig extends Shape
{
    /**
     * @param array{HumanLoopActivationConditions: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
