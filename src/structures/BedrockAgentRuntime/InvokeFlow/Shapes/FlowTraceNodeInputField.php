<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceNodeInputContent $content
 * @property string $nodeInputName
 */
class FlowTraceNodeInputField extends Shape
{
    /**
     * @param array{
     *     content: FlowTraceNodeInputContent,
     *     nodeInputName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
