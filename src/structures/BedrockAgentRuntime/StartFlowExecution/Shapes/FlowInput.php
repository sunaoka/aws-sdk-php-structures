<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StartFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property string|null $nodeOutputName
 * @property FlowInputContent $content
 * @property string|null $nodeInputName
 */
class FlowInput extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     nodeOutputName?: string|null,
     *     content: FlowInputContent,
     *     nodeInputName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
