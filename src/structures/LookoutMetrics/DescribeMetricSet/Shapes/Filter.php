<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DimensionValue
 * @property 'EQUALS'|null $FilterOperation
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     DimensionValue?: string|null,
     *     FilterOperation?: 'EQUALS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
