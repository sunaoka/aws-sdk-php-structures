<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceConfiguration $performanceConfig
 */
class BedrockModelConfigurations extends Shape
{
    /**
     * @param array{performanceConfig?: PerformanceConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
