<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeInputName
 * @property FlowTraceNodeInputContent $content
 * @property FlowTraceNodeInputSource|null $source
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 * @property 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null $category
 * @property list<FlowTraceNodeInputExecutionChainItem>|null $executionChain
 */
class FlowTraceNodeInputField extends Shape
{
    /**
     * @param array{
     *     nodeInputName: string,
     *     content: FlowTraceNodeInputContent,
     *     source?: FlowTraceNodeInputSource|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null,
     *     category?: 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null,
     *     executionChain?: list<FlowTraceNodeInputExecutionChainItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
