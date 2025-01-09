<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartFieldWells $FieldWells
 * @property LineChartSortConfiguration $SortConfiguration
 * @property list<ForecastConfiguration> $ForecastConfigurations
 * @property 'LINE'|'AREA'|'STACKED_AREA' $Type
 * @property SmallMultiplesOptions $SmallMultiplesOptions
 * @property AxisDisplayOptions $XAxisDisplayOptions
 * @property ChartAxisLabelOptions $XAxisLabelOptions
 * @property LineSeriesAxisDisplayOptions $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions $PrimaryYAxisLabelOptions
 * @property LineSeriesAxisDisplayOptions $SecondaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions $SecondaryYAxisLabelOptions
 * @property SingleAxisOptions $SingleAxisOptions
 * @property LineChartDefaultSeriesSettings $DefaultSeriesSettings
 * @property list<SeriesItem> $Series
 * @property LegendOptions $Legend
 * @property DataLabelOptions $DataLabels
 * @property list<ReferenceLine> $ReferenceLines
 * @property TooltipOptions $Tooltip
 * @property list<ContributionAnalysisDefault> $ContributionAnalysisDefaults
 * @property VisualPalette $VisualPalette
 * @property VisualInteractionOptions $Interactions
 */
class LineChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: LineChartFieldWells,
     *     SortConfiguration?: LineChartSortConfiguration,
     *     ForecastConfigurations?: list<ForecastConfiguration>,
     *     Type?: 'LINE'|'AREA'|'STACKED_AREA',
     *     SmallMultiplesOptions?: SmallMultiplesOptions,
     *     XAxisDisplayOptions?: AxisDisplayOptions,
     *     XAxisLabelOptions?: ChartAxisLabelOptions,
     *     PrimaryYAxisDisplayOptions?: LineSeriesAxisDisplayOptions,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     SecondaryYAxisDisplayOptions?: LineSeriesAxisDisplayOptions,
     *     SecondaryYAxisLabelOptions?: ChartAxisLabelOptions,
     *     SingleAxisOptions?: SingleAxisOptions,
     *     DefaultSeriesSettings?: LineChartDefaultSeriesSettings,
     *     Series?: list<SeriesItem>,
     *     Legend?: LegendOptions,
     *     DataLabels?: DataLabelOptions,
     *     ReferenceLines?: list<ReferenceLine>,
     *     Tooltip?: TooltipOptions,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>,
     *     VisualPalette?: VisualPalette,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
