<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomOrchestrationTraceEvent $event
 * @property string $traceId
 */
class CustomOrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     event?: CustomOrchestrationTraceEvent,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
