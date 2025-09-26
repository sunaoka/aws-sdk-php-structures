<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $requestId
 * @property string $serviceName
 * @property string $operationName
 * @property Document|null $operationRequest
 * @property Document|null $operationResponse
 */
class FlowTraceNodeActionEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     requestId: string,
     *     serviceName: string,
     *     operationName: string,
     *     operationRequest?: Document|null,
     *     operationResponse?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
