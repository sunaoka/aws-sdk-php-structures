<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowOutputContent $content
 * @property string $nodeName
 * @property 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode' $nodeType
 */
class FlowOutputEvent extends Shape
{
    /**
     * @param array{
     *     content: FlowOutputContent,
     *     nodeName: string,
     *     nodeType: 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
