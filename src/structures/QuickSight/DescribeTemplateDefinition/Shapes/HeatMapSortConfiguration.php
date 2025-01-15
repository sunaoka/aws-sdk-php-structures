<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $HeatMapRowSort
 * @property list<FieldSortOptions>|null $HeatMapColumnSort
 * @property ItemsLimitConfiguration|null $HeatMapRowItemsLimitConfiguration
 * @property ItemsLimitConfiguration|null $HeatMapColumnItemsLimitConfiguration
 */
class HeatMapSortConfiguration extends Shape
{
    /**
     * @param array{
     *     HeatMapRowSort?: list<FieldSortOptions>|null,
     *     HeatMapColumnSort?: list<FieldSortOptions>|null,
     *     HeatMapRowItemsLimitConfiguration?: ItemsLimitConfiguration|null,
     *     HeatMapColumnItemsLimitConfiguration?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
