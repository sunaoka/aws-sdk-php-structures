<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowCondition> $conditions
 */
class ConditionFlowNodeConfiguration extends Shape
{
    /**
     * @param array{conditions: list<FlowCondition>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
