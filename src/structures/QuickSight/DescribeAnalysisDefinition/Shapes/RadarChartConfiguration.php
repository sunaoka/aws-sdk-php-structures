<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartFieldWells $FieldWells
 * @property RadarChartSortConfiguration $SortConfiguration
 * @property 'CIRCLE'|'POLYGON' $Shape
 * @property RadarChartSeriesSettings $BaseSeriesSettings
 * @property double $StartAngle
 * @property VisualPalette $VisualPalette
 * @property 'HIDDEN'|'VISIBLE' $AlternateBandColorsVisibility
 * @property string $AlternateBandEvenColor
 * @property string $AlternateBandOddColor
 * @property AxisDisplayOptions $CategoryAxis
 * @property ChartAxisLabelOptions $CategoryLabelOptions
 * @property AxisDisplayOptions $ColorAxis
 * @property ChartAxisLabelOptions $ColorLabelOptions
 * @property LegendOptions $Legend
 * @property 'AUTO'|'INDEPENDENT'|'SHARED' $AxesRangeScale
 * @property VisualInteractionOptions $Interactions
 */
class RadarChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: RadarChartFieldWells,
     *     SortConfiguration?: RadarChartSortConfiguration,
     *     Shape?: 'CIRCLE'|'POLYGON',
     *     BaseSeriesSettings?: RadarChartSeriesSettings,
     *     StartAngle?: double,
     *     VisualPalette?: VisualPalette,
     *     AlternateBandColorsVisibility?: 'HIDDEN'|'VISIBLE',
     *     AlternateBandEvenColor?: string,
     *     AlternateBandOddColor?: string,
     *     CategoryAxis?: AxisDisplayOptions,
     *     CategoryLabelOptions?: ChartAxisLabelOptions,
     *     ColorAxis?: AxisDisplayOptions,
     *     ColorLabelOptions?: ChartAxisLabelOptions,
     *     Legend?: LegendOptions,
     *     AxesRangeScale?: 'AUTO'|'INDEPENDENT'|'SHARED',
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
