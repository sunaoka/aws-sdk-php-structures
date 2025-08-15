<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowNode>|null $nodes
 * @property list<FlowConnection>|null $connections
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     nodes?: list<FlowNode>|null,
     *     connections?: list<FlowConnection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
