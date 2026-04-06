<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION'|'INTERNAL_SERVER'|'NODE_EXECUTION_FAILED' $errorCode
 * @property string $errorMessage
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class FlowFailureEvent extends Shape
{
    /**
     * @param array{
     *     errorCode: 'VALIDATION'|'INTERNAL_SERVER'|'NODE_EXECUTION_FAILED',
     *     errorMessage: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
