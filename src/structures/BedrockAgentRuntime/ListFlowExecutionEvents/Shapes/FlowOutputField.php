<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property FlowExecutionContent $content
 */
class FlowOutputField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     content: FlowExecutionContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
