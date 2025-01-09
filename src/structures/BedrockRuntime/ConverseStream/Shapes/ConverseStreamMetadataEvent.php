<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TokenUsage $usage
 * @property ConverseStreamMetrics $metrics
 * @property ConverseStreamTrace $trace
 * @property PerformanceConfiguration $performanceConfig
 */
class ConverseStreamMetadataEvent extends Shape
{
    /**
     * @param array{
     *     usage: TokenUsage,
     *     metrics: ConverseStreamMetrics,
     *     trace?: ConverseStreamTrace,
     *     performanceConfig?: PerformanceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
