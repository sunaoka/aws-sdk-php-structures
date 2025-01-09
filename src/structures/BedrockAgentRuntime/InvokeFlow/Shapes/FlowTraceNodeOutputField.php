<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceNodeOutputContent $content
 * @property string $nodeOutputName
 */
class FlowTraceNodeOutputField extends Shape
{
    /**
     * @param array{
     *     content: FlowTraceNodeOutputContent,
     *     nodeOutputName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
