<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartFieldWells|null $FieldWells
 * @property RadarChartSortConfiguration|null $SortConfiguration
 * @property 'CIRCLE'|'POLYGON'|null $Shape
 * @property RadarChartSeriesSettings|null $BaseSeriesSettings
 * @property double|null $StartAngle
 * @property VisualPalette|null $VisualPalette
 * @property 'HIDDEN'|'VISIBLE'|null $AlternateBandColorsVisibility
 * @property string|null $AlternateBandEvenColor
 * @property string|null $AlternateBandOddColor
 * @property AxisDisplayOptions|null $CategoryAxis
 * @property ChartAxisLabelOptions|null $CategoryLabelOptions
 * @property AxisDisplayOptions|null $ColorAxis
 * @property ChartAxisLabelOptions|null $ColorLabelOptions
 * @property LegendOptions|null $Legend
 * @property 'AUTO'|'INDEPENDENT'|'SHARED'|null $AxesRangeScale
 * @property VisualInteractionOptions|null $Interactions
 */
class RadarChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: RadarChartFieldWells|null,
     *     SortConfiguration?: RadarChartSortConfiguration|null,
     *     Shape?: 'CIRCLE'|'POLYGON'|null,
     *     BaseSeriesSettings?: RadarChartSeriesSettings|null,
     *     StartAngle?: double|null,
     *     VisualPalette?: VisualPalette|null,
     *     AlternateBandColorsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     AlternateBandEvenColor?: string|null,
     *     AlternateBandOddColor?: string|null,
     *     CategoryAxis?: AxisDisplayOptions|null,
     *     CategoryLabelOptions?: ChartAxisLabelOptions|null,
     *     ColorAxis?: AxisDisplayOptions|null,
     *     ColorLabelOptions?: ChartAxisLabelOptions|null,
     *     Legend?: LegendOptions|null,
     *     AxesRangeScale?: 'AUTO'|'INDEPENDENT'|'SHARED'|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
