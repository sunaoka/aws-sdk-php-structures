<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'VALIDATION'|'INTERNAL_SERVER'|'NODE_EXECUTION_FAILED' $errorCode
 * @property string $errorMessage
 */
class FlowFailureEvent extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     errorCode: 'VALIDATION'|'INTERNAL_SERVER'|'NODE_EXECUTION_FAILED',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
