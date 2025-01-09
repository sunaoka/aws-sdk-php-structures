<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GaugeChartFieldWells $FieldWells
 * @property GaugeChartOptions $GaugeChartOptions
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $TooltipOptions
 * @property VisualPalette $VisualPalette
 * @property GaugeChartColorConfiguration $ColorConfiguration
 * @property VisualInteractionOptions $Interactions
 */
class GaugeChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: GaugeChartFieldWells,
     *     GaugeChartOptions?: GaugeChartOptions,
     *     DataLabels?: DataLabelOptions,
     *     TooltipOptions?: TooltipOptions,
     *     VisualPalette?: VisualPalette,
     *     ColorConfiguration?: GaugeChartColorConfiguration,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
