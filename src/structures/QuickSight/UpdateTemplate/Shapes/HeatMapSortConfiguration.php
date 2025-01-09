<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $HeatMapRowSort
 * @property list<FieldSortOptions> $HeatMapColumnSort
 * @property ItemsLimitConfiguration $HeatMapRowItemsLimitConfiguration
 * @property ItemsLimitConfiguration $HeatMapColumnItemsLimitConfiguration
 */
class HeatMapSortConfiguration extends Shape
{
    /**
     * @param array{
     *     HeatMapRowSort?: list<FieldSortOptions>,
     *     HeatMapColumnSort?: list<FieldSortOptions>,
     *     HeatMapRowItemsLimitConfiguration?: ItemsLimitConfiguration,
     *     HeatMapColumnItemsLimitConfiguration?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
