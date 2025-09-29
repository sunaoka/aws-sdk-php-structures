<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode' $nodeType
 * @property FlowMultiTurnInputContent $content
 */
class FlowMultiTurnInputRequestEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     nodeType: 'FlowInputNode'|'FlowOutputNode'|'LambdaFunctionNode'|'KnowledgeBaseNode'|'PromptNode'|'ConditionNode'|'LexNode',
     *     content: FlowMultiTurnInputContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
