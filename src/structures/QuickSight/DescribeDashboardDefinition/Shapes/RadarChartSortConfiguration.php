<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $CategorySort
 * @property ItemsLimitConfiguration $CategoryItemsLimit
 * @property list<FieldSortOptions> $ColorSort
 * @property ItemsLimitConfiguration $ColorItemsLimit
 */
class RadarChartSortConfiguration extends Shape
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
