<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property int|null $index
 * @property 'Iterator'|'Loop' $type
 */
class NodeInputExecutionChainItem extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     index?: int|null,
     *     type: 'Iterator'|'Loop'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
