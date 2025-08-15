<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector'|'InlineCode'|'Loop'|'LoopInput'|'LoopController' $type
 * @property FlowNodeConfiguration|null $configuration
 * @property list<FlowNodeInput>|null $inputs
 * @property list<FlowNodeOutput>|null $outputs
 */
class FlowNode extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector'|'InlineCode'|'Loop'|'LoopInput'|'LoopController',
     *     configuration?: FlowNodeConfiguration|null,
     *     inputs?: list<FlowNodeInput>|null,
     *     outputs?: list<FlowNodeOutput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
