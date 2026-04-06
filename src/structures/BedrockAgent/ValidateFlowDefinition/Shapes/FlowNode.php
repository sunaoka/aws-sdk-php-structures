<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowNodeConfiguration|null $configuration
 * @property list<FlowNodeInput>|null $inputs
 * @property string $name
 * @property list<FlowNodeOutput>|null $outputs
 * @property 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector' $type
 */
class FlowNode extends Shape
{
    /**
     * @param array{
     *     configuration?: FlowNodeConfiguration|null,
     *     inputs?: list<FlowNodeInput>|null,
     *     name: string,
     *     outputs?: list<FlowNodeOutput>|null,
     *     type: 'Input'|'Output'|'KnowledgeBase'|'Condition'|'Lex'|'Prompt'|'LambdaFunction'|'Storage'|'Agent'|'Retrieval'|'Iterator'|'Collector'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
