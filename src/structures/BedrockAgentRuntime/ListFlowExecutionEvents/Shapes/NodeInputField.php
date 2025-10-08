<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property NodeExecutionContent $content
 * @property NodeInputSource|null $source
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 * @property 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null $category
 * @property list<NodeInputExecutionChainItem>|null $executionChain
 */
class NodeInputField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     content: NodeExecutionContent,
     *     source?: NodeInputSource|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null,
     *     category?: 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null,
     *     executionChain?: list<NodeInputExecutionChainItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
