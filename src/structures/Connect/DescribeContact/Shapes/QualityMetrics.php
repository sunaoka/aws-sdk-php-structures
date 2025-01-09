<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentQualityMetrics $Agent
 * @property CustomerQualityMetrics $Customer
 */
class QualityMetrics extends Shape
{
    /**
     * @param array{
     *     Agent?: AgentQualityMetrics,
     *     Customer?: CustomerQualityMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
