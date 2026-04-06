<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null $category
 * @property FlowTraceNodeInputContent $content
 * @property list<FlowTraceNodeInputExecutionChainItem>|null $executionChain
 * @property string $nodeInputName
 * @property FlowTraceNodeInputSource|null $source
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 */
class FlowTraceNodeInputField extends Shape
{
    /**
     * @param array{
     *     category?: 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null,
     *     content: FlowTraceNodeInputContent,
     *     executionChain?: list<FlowTraceNodeInputExecutionChainItem>|null,
     *     nodeInputName: string,
     *     source?: FlowTraceNodeInputSource|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
