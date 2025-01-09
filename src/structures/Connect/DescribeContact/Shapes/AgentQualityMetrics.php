<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioQualityMetricsInfo $Audio
 */
class AgentQualityMetrics extends Shape
{
    /**
     * @param array{Audio?: AudioQualityMetricsInfo} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
