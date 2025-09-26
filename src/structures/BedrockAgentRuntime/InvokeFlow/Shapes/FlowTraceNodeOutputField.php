<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeOutputName
 * @property FlowTraceNodeOutputContent $content
 * @property list<FlowTraceNodeOutputNext>|null $next
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 */
class FlowTraceNodeOutputField extends Shape
{
    /**
     * @param array{
     *     nodeOutputName: string,
     *     content: FlowTraceNodeOutputContent,
     *     next?: list<FlowTraceNodeOutputNext>|null,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
