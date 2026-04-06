<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null $category
 * @property NodeExecutionContent $content
 * @property list<NodeInputExecutionChainItem>|null $executionChain
 * @property string $name
 * @property NodeInputSource|null $source
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 */
class NodeInputField extends Shape
{
    /**
     * @param array{
     *     category?: 'LoopCondition'|'ReturnValueToLoopStart'|'ExitLoop'|null,
     *     content: NodeExecutionContent,
     *     executionChain?: list<NodeInputExecutionChainItem>|null,
     *     name: string,
     *     source?: NodeInputSource|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
