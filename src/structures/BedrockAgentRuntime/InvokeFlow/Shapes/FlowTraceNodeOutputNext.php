<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property string $inputFieldName
 */
class FlowTraceNodeOutputNext extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     inputFieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
