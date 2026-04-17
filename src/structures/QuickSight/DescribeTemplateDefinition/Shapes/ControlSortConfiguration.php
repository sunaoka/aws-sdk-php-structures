<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectableValuesSort|null $SelectableValuesSort
 * @property AggregationSortConfiguration|null $ControlColumnSort
 */
class ControlSortConfiguration extends Shape
{
    /**
     * @param array{
     *     SelectableValuesSort?: SelectableValuesSort|null,
     *     ControlColumnSort?: AggregationSortConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
