<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property NodeExecutionContent $content
 * @property list<NodeOutputNext>|null $next
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 */
class NodeOutputField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     content: NodeExecutionContent,
     *     next?: list<NodeOutputNext>|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
