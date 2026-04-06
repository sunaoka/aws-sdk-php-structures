<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputFieldName
 * @property string $nodeName
 */
class FlowTraceNodeOutputNext extends Shape
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
