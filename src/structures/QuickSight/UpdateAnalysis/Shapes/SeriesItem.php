<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSeriesItem $FieldSeriesItem
 * @property DataFieldSeriesItem $DataFieldSeriesItem
 */
class SeriesItem extends Shape
{
    /**
     * @param array{
     *     FieldSeriesItem?: FieldSeriesItem,
     *     DataFieldSeriesItem?: DataFieldSeriesItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
