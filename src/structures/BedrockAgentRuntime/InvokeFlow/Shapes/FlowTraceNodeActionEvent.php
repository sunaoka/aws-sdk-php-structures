<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property string $operationName
 * @property string $requestId
 * @property string $serviceName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class FlowTraceNodeActionEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     operationName: string,
     *     requestId: string,
     *     serviceName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
