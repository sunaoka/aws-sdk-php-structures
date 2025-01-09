<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionValue
 * @property 'EQUALS' $FilterOperation
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     DimensionValue?: string,
     *     FilterOperation?: 'EQUALS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
