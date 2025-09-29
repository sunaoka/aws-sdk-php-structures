<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $traceId
 * @property CustomOrchestrationTraceEvent|null $event
 */
class CustomOrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     traceId?: string|null,
     *     event?: CustomOrchestrationTraceEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
