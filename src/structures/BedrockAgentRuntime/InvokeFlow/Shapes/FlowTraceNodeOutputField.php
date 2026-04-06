<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceNodeOutputContent $content
 * @property list<FlowTraceNodeOutputNext>|null $next
 * @property string $nodeOutputName
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array'|null $type
 */
class FlowTraceNodeOutputField extends Shape
{
    /**
     * @param array{
     *     content: FlowTraceNodeOutputContent,
     *     next?: list<FlowTraceNodeOutputNext>|null,
     *     nodeOutputName: string,
     *     type?: 'String'|'Number'|'Boolean'|'Object'|'Array'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
