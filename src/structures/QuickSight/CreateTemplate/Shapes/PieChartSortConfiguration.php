<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $CategorySort
 * @property ItemsLimitConfiguration $CategoryItemsLimit
 * @property list<FieldSortOptions> $SmallMultiplesSort
 * @property ItemsLimitConfiguration $SmallMultiplesLimitConfiguration
 */
class PieChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>,
     *     CategoryItemsLimit?: ItemsLimitConfiguration,
     *     SmallMultiplesSort?: list<FieldSortOptions>,
     *     SmallMultiplesLimitConfiguration?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
