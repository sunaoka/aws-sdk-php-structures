<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION'|'DEPENDENCY_FAILED'|'BAD_GATEWAY'|'INTERNAL_SERVER' $errorCode
 * @property string $errorMessage
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class NodeFailureEvent extends Shape
{
    /**
     * @param array{
     *     errorCode: 'VALIDATION'|'DEPENDENCY_FAILED'|'BAD_GATEWAY'|'INTERNAL_SERVER',
     *     errorMessage: string,
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
