<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $failureReason
 * @property string $traceId
 */
class FailureTrace extends Shape
{
    /**
     * @param array{
     *     failureReason?: string,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
