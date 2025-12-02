<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property string $nodeName
 * @property string $outputFieldName
 */
class NodeInputSource extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     nodeName: string,
     *     outputFieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
