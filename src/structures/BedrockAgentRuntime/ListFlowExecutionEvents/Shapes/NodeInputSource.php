<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property string $outputFieldName
 * @property string $expression
 */
class NodeInputSource extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     outputFieldName: string,
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
