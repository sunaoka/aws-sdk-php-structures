<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentFlowNodeConfiguration|null $agent
 * @property CollectorFlowNodeConfiguration|null $collector
 * @property ConditionFlowNodeConfiguration|null $condition
 * @property InlineCodeFlowNodeConfiguration|null $inlineCode
 * @property InputFlowNodeConfiguration|null $input
 * @property IteratorFlowNodeConfiguration|null $iterator
 * @property KnowledgeBaseFlowNodeConfiguration|null $knowledgeBase
 * @property LambdaFunctionFlowNodeConfiguration|null $lambdaFunction
 * @property LexFlowNodeConfiguration|null $lex
 * @property LoopFlowNodeConfiguration|null $loop
 * @property LoopControllerFlowNodeConfiguration|null $loopController
 * @property LoopInputFlowNodeConfiguration|null $loopInput
 * @property OutputFlowNodeConfiguration|null $output
 * @property PromptFlowNodeConfiguration|null $prompt
 * @property RetrievalFlowNodeConfiguration|null $retrieval
 * @property StorageFlowNodeConfiguration|null $storage
 */
class FlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     agent?: AgentFlowNodeConfiguration|null,
     *     collector?: CollectorFlowNodeConfiguration|null,
     *     condition?: ConditionFlowNodeConfiguration|null,
     *     inlineCode?: InlineCodeFlowNodeConfiguration|null,
     *     input?: InputFlowNodeConfiguration|null,
     *     iterator?: IteratorFlowNodeConfiguration|null,
     *     knowledgeBase?: KnowledgeBaseFlowNodeConfiguration|null,
     *     lambdaFunction?: LambdaFunctionFlowNodeConfiguration|null,
     *     lex?: LexFlowNodeConfiguration|null,
     *     loop?: LoopFlowNodeConfiguration|null,
     *     loopController?: LoopControllerFlowNodeConfiguration|null,
     *     loopInput?: LoopInputFlowNodeConfiguration|null,
     *     output?: OutputFlowNodeConfiguration|null,
     *     prompt?: PromptFlowNodeConfiguration|null,
     *     retrieval?: RetrievalFlowNodeConfiguration|null,
     *     storage?: StorageFlowNodeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
