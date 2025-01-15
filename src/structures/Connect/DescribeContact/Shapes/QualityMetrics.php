<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentQualityMetrics|null $Agent
 * @property CustomerQualityMetrics|null $Customer
 */
class QualityMetrics extends Shape
{
    /**
     * @param array{
     *     Agent?: AgentQualityMetrics|null,
     *     Customer?: CustomerQualityMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
