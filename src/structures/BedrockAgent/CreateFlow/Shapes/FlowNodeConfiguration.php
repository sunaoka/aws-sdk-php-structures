<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InputFlowNodeConfiguration|null $input
 * @property OutputFlowNodeConfiguration|null $output
 * @property KnowledgeBaseFlowNodeConfiguration|null $knowledgeBase
 * @property ConditionFlowNodeConfiguration|null $condition
 * @property LexFlowNodeConfiguration|null $lex
 * @property PromptFlowNodeConfiguration|null $prompt
 * @property LambdaFunctionFlowNodeConfiguration|null $lambdaFunction
 * @property StorageFlowNodeConfiguration|null $storage
 * @property AgentFlowNodeConfiguration|null $agent
 * @property RetrievalFlowNodeConfiguration|null $retrieval
 * @property IteratorFlowNodeConfiguration|null $iterator
 * @property CollectorFlowNodeConfiguration|null $collector
 * @property InlineCodeFlowNodeConfiguration|null $inlineCode
 * @property LoopFlowNodeConfiguration|null $loop
 * @property LoopInputFlowNodeConfiguration|null $loopInput
 * @property LoopControllerFlowNodeConfiguration|null $loopController
 */
class FlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     input?: InputFlowNodeConfiguration|null,
     *     output?: OutputFlowNodeConfiguration|null,
     *     knowledgeBase?: KnowledgeBaseFlowNodeConfiguration|null,
     *     condition?: ConditionFlowNodeConfiguration|null,
     *     lex?: LexFlowNodeConfiguration|null,
     *     prompt?: PromptFlowNodeConfiguration|null,
     *     lambdaFunction?: LambdaFunctionFlowNodeConfiguration|null,
     *     storage?: StorageFlowNodeConfiguration|null,
     *     agent?: AgentFlowNodeConfiguration|null,
     *     retrieval?: RetrievalFlowNodeConfiguration|null,
     *     iterator?: IteratorFlowNodeConfiguration|null,
     *     collector?: CollectorFlowNodeConfiguration|null,
     *     inlineCode?: InlineCodeFlowNodeConfiguration|null,
     *     loop?: LoopFlowNodeConfiguration|null,
     *     loopInput?: LoopInputFlowNodeConfiguration|null,
     *     loopController?: LoopControllerFlowNodeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
