<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $CategorySort
 * @property ItemsLimitConfiguration $CategoryItemsLimitConfiguration
 * @property ItemsLimitConfiguration $ColorItemsLimitConfiguration
 * @property list<FieldSortOptions> $SmallMultiplesSort
 * @property ItemsLimitConfiguration $SmallMultiplesLimitConfiguration
 */
class LineChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>,
     *     CategoryItemsLimitConfiguration?: ItemsLimitConfiguration,
     *     ColorItemsLimitConfiguration?: ItemsLimitConfiguration,
     *     SmallMultiplesSort?: list<FieldSortOptions>,
     *     SmallMultiplesLimitConfiguration?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
