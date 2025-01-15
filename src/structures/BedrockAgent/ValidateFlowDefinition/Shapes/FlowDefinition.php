<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowConnection>|null $connections
 * @property list<FlowNode>|null $nodes
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     connections?: list<FlowConnection>|null,
     *     nodes?: list<FlowNode>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
