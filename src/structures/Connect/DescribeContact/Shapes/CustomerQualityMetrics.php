<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioQualityMetricsInfo|null $Audio
 */
class CustomerQualityMetrics extends Shape
{
    /**
     * @param array{Audio?: AudioQualityMetricsInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
