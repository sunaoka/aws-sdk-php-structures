<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $CategorySort
 * @property ItemsLimitConfiguration|null $CategoryItemsLimit
 * @property list<FieldSortOptions>|null $ColorSort
 * @property ItemsLimitConfiguration|null $ColorItemsLimit
 * @property list<FieldSortOptions>|null $SmallMultiplesSort
 * @property ItemsLimitConfiguration|null $SmallMultiplesLimitConfiguration
 */
class BarChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>|null,
     *     CategoryItemsLimit?: ItemsLimitConfiguration|null,
     *     ColorSort?: list<FieldSortOptions>|null,
     *     ColorItemsLimit?: ItemsLimitConfiguration|null,
     *     SmallMultiplesSort?: list<FieldSortOptions>|null,
     *     SmallMultiplesLimitConfiguration?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
