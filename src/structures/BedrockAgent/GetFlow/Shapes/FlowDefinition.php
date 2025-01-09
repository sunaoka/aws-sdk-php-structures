<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowConnection> $connections
 * @property list<FlowNode> $nodes
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     connections?: list<FlowConnection>,
     *     nodes?: list<FlowNode>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
