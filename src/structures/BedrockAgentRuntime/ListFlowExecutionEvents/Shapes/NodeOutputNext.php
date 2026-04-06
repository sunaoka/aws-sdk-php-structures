<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputFieldName
 * @property string $nodeName
 */
class NodeOutputNext extends Shape
{
    /**
     * @param array{
     *     inputFieldName: string,
     *     nodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
