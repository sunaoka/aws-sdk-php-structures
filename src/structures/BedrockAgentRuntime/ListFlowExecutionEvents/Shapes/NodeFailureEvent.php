<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'VALIDATION'|'DEPENDENCY_FAILED'|'BAD_GATEWAY'|'INTERNAL_SERVER' $errorCode
 * @property string $errorMessage
 */
class NodeFailureEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     errorCode: 'VALIDATION'|'DEPENDENCY_FAILED'|'BAD_GATEWAY'|'INTERNAL_SERVER',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
