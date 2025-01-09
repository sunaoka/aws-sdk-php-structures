<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentFlowNodeConfiguration $agent
 * @property CollectorFlowNodeConfiguration $collector
 * @property ConditionFlowNodeConfiguration $condition
 * @property InputFlowNodeConfiguration $input
 * @property IteratorFlowNodeConfiguration $iterator
 * @property KnowledgeBaseFlowNodeConfiguration $knowledgeBase
 * @property LambdaFunctionFlowNodeConfiguration $lambdaFunction
 * @property LexFlowNodeConfiguration $lex
 * @property OutputFlowNodeConfiguration $output
 * @property PromptFlowNodeConfiguration $prompt
 * @property RetrievalFlowNodeConfiguration $retrieval
 * @property StorageFlowNodeConfiguration $storage
 */
class FlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     agent?: AgentFlowNodeConfiguration,
     *     collector?: CollectorFlowNodeConfiguration,
     *     condition?: ConditionFlowNodeConfiguration,
     *     input?: InputFlowNodeConfiguration,
     *     iterator?: IteratorFlowNodeConfiguration,
     *     knowledgeBase?: KnowledgeBaseFlowNodeConfiguration,
     *     lambdaFunction?: LambdaFunctionFlowNodeConfiguration,
     *     lex?: LexFlowNodeConfiguration,
     *     output?: OutputFlowNodeConfiguration,
     *     prompt?: PromptFlowNodeConfiguration,
     *     retrieval?: RetrievalFlowNodeConfiguration,
     *     storage?: StorageFlowNodeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
