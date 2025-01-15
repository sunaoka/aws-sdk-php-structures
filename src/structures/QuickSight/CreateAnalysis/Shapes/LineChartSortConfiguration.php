<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $CategorySort
 * @property ItemsLimitConfiguration|null $CategoryItemsLimitConfiguration
 * @property ItemsLimitConfiguration|null $ColorItemsLimitConfiguration
 * @property list<FieldSortOptions>|null $SmallMultiplesSort
 * @property ItemsLimitConfiguration|null $SmallMultiplesLimitConfiguration
 */
class LineChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>|null,
     *     CategoryItemsLimitConfiguration?: ItemsLimitConfiguration|null,
     *     ColorItemsLimitConfiguration?: ItemsLimitConfiguration|null,
     *     SmallMultiplesSort?: list<FieldSortOptions>|null,
     *     SmallMultiplesLimitConfiguration?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
