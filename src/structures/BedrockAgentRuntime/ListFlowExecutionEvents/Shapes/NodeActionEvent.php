<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property string $operationName
 * @property Document|null $operationRequest
 * @property Document|null $operationResponse
 * @property string $requestId
 * @property string $serviceName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class NodeActionEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     operationName: string,
     *     operationRequest?: Document|null,
     *     operationResponse?: Document|null,
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
