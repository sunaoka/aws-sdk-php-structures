<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'optimized' $latency
 */
class PerformanceConfiguration extends Shape
{
    /**
     * @param array{latency?: 'standard'|'optimized'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
