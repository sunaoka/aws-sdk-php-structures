<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode' $nodeType
 * @property FlowOutputContent $content
 */
class FlowOutputEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     nodeType: 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode',
     *     content: FlowOutputContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
