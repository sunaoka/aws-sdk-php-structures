<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowNodeConfiguration $configuration
 * @property list<FlowNodeInput> $inputs
 * @property string $name
 * @property list<FlowNodeOutput> $outputs
 * @property 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector' $type
 */
class FlowNode extends Shape
{
    /**
     * @param array{
     *     configuration?: FlowNodeConfiguration,
     *     inputs?: list<FlowNodeInput>,
     *     name: string,
     *     outputs?: list<FlowNodeOutput>,
     *     type: 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
