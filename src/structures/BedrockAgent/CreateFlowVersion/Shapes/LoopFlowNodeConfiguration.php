<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowDefinition $definition
 */
class LoopFlowNodeConfiguration extends Shape
{
    /**
     * @param array{definition: FlowDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
