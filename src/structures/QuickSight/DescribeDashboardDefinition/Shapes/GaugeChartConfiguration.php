<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GaugeChartFieldWells|null $FieldWells
 * @property GaugeChartOptions|null $GaugeChartOptions
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $TooltipOptions
 * @property VisualPalette|null $VisualPalette
 * @property GaugeChartColorConfiguration|null $ColorConfiguration
 * @property VisualInteractionOptions|null $Interactions
 */
class GaugeChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: GaugeChartFieldWells|null,
     *     GaugeChartOptions?: GaugeChartOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     TooltipOptions?: TooltipOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     ColorConfiguration?: GaugeChartColorConfiguration|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
