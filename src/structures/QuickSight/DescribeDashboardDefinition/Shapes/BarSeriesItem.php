<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldBarSeriesItem|null $FieldBarSeriesItem
 * @property DataFieldBarSeriesItem|null $DataFieldBarSeriesItem
 */
class BarSeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldBarSeriesItem?: FieldBarSeriesItem|null,
     *     DataFieldBarSeriesItem?: DataFieldBarSeriesItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
