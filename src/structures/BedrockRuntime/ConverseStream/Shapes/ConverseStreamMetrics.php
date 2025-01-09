<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $latencyMs
 */
class ConverseStreamMetrics extends Shape
{
    /**
     * @param array{latencyMs: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
