<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HumanLoopActivationConditionsConfig $HumanLoopActivationConditionsConfig
 */
class HumanLoopActivationConfig extends Shape
{
    /**
     * @param array{HumanLoopActivationConditionsConfig: HumanLoopActivationConditionsConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
