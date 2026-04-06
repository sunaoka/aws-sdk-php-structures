<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOrchestrationTraceEvent|null $event
 * @property string|null $traceId
 */
class CustomOrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     event?: CustomOrchestrationTraceEvent|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
