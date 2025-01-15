<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HistogramFieldWells|null $FieldWells
 * @property AxisDisplayOptions|null $XAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $XAxisLabelOptions
 * @property AxisDisplayOptions|null $YAxisDisplayOptions
 * @property HistogramBinOptions|null $BinOptions
 * @property DataLabelOptions|null $DataLabels
 * @property TooltipOptions|null $Tooltip
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class HistogramConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: HistogramFieldWells|null,
     *     XAxisDisplayOptions?: AxisDisplayOptions|null,
     *     XAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     YAxisDisplayOptions?: AxisDisplayOptions|null,
     *     BinOptions?: HistogramBinOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     Tooltip?: TooltipOptions|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
