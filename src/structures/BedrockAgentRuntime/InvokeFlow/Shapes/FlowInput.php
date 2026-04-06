<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowInputContent $content
 * @property string $nodeName
 * @property string $nodeOutputName
 */
class FlowInput extends Shape
{
    /**
     * @param array{
     *     content: FlowInputContent,
     *     nodeName: string,
     *     nodeOutputName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
