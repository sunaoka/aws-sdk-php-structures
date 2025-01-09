<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceConfiguration $performanceConfig
 */
class ModelPerformanceConfiguration extends Shape
{
    /**
     * @param array{performanceConfig?: PerformanceConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
