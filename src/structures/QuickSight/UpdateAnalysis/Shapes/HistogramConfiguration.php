<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistogramFieldWells $FieldWells
 * @property AxisDisplayOptions $XAxisDisplayOptions
 * @property ChartAxisLabelOptions $XAxisLabelOptions
 * @property AxisDisplayOptions $YAxisDisplayOptions
 * @property HistogramBinOptions $BinOptions
 * @property DataLabelOptions $DataLabels
 * @property TooltipOptions $Tooltip
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class HistogramConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: HistogramFieldWells,
     *     XAxisDisplayOptions?: AxisDisplayOptions,
     *     XAxisLabelOptions?: ChartAxisLabelOptions,
     *     YAxisDisplayOptions?: AxisDisplayOptions,
     *     BinOptions?: HistogramBinOptions,
     *     DataLabels?: DataLabelOptions,
     *     Tooltip?: TooltipOptions,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
