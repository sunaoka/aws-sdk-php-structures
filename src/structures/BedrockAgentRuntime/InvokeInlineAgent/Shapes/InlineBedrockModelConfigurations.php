<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceConfiguration|null $performanceConfig
 */
class InlineBedrockModelConfigurations extends Shape
{
    /**
     * @param array{performanceConfig?: PerformanceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
