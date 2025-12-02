<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $index
 * @property string $nodeName
 * @property 'Iterator'|'Loop' $type
 */
class FlowTraceNodeInputExecutionChainItem extends Shape
{
    /**
     * @param array{
     *     index?: int|null,
     *     nodeName: string,
     *     type: 'Iterator'|'Loop'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
