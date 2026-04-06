<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WordCloudFieldWells|null $FieldWells
 * @property WordCloudSortConfiguration|null $SortConfiguration
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property WordCloudOptions|null $WordCloudOptions
 * @property VisualInteractionOptions|null $Interactions
 */
class WordCloudChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: WordCloudFieldWells|null,
     *     SortConfiguration?: WordCloudSortConfiguration|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     WordCloudOptions?: WordCloudOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
