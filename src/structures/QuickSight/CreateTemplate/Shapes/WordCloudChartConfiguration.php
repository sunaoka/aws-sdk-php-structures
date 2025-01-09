<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WordCloudFieldWells $FieldWells
 * @property WordCloudSortConfiguration $SortConfiguration
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property WordCloudOptions $WordCloudOptions
 * @property VisualInteractionOptions $Interactions
 */
class WordCloudChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: WordCloudFieldWells,
     *     SortConfiguration?: WordCloudSortConfiguration,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     WordCloudOptions?: WordCloudOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
