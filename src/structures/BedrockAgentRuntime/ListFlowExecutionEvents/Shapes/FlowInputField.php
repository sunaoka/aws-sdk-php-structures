<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowExecutionContent $content
 * @property string $name
 */
class FlowInputField extends Shape
{
    /**
     * @param array{
     *     content: FlowExecutionContent,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
