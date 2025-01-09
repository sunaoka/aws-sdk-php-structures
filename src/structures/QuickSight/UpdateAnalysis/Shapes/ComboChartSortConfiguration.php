<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $CategorySort
 * @property ItemsLimitConfiguration $CategoryItemsLimit
 * @property list<FieldSortOptions> $ColorSort
 * @property ItemsLimitConfiguration $ColorItemsLimit
 */
class ComboChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>,
     *     CategoryItemsLimit?: ItemsLimitConfiguration,
     *     ColorSort?: list<FieldSortOptions>,
     *     ColorItemsLimit?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
