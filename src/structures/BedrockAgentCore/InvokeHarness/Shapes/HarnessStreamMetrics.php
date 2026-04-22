<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $latencyMs
 */
class HarnessStreamMetrics extends Shape
{
    /**
     * @param array{latencyMs: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
