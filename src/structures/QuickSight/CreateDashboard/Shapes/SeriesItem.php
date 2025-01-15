<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSeriesItem|null $FieldSeriesItem
 * @property DataFieldSeriesItem|null $DataFieldSeriesItem
 */
class SeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldSeriesItem?: FieldSeriesItem|null,
     *     DataFieldSeriesItem?: DataFieldSeriesItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
