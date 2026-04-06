<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceConfiguration|null $performanceConfig
 */
class BedrockModelConfigurations extends Shape
{
    /**
     * @param array{performanceConfig?: PerformanceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
