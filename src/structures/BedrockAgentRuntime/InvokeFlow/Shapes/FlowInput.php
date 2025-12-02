<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowInputContent $content
 * @property string|null $nodeInputName
 * @property string $nodeName
 * @property string|null $nodeOutputName
 */
class FlowInput extends Shape
{
    /**
     * @param array{
     *     content: FlowInputContent,
     *     nodeInputName?: string|null,
     *     nodeName: string,
     *     nodeOutputName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
