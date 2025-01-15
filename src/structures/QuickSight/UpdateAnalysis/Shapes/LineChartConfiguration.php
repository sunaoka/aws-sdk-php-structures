<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartFieldWells|null $FieldWells
 * @property LineChartSortConfiguration|null $SortConfiguration
 * @property list<ForecastConfiguration>|null $ForecastConfigurations
 * @property 'LINE'|'AREA'|'STACKED_AREA'|null $Type
 * @property SmallMultiplesOptions|null $SmallMultiplesOptions
 * @property AxisDisplayOptions|null $XAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $XAxisLabelOptions
 * @property LineSeriesAxisDisplayOptions|null $PrimaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $PrimaryYAxisLabelOptions
 * @property LineSeriesAxisDisplayOptions|null $SecondaryYAxisDisplayOptions
 * @property ChartAxisLabelOptions|null $SecondaryYAxisLabelOptions
 * @property SingleAxisOptions|null $SingleAxisOptions
 * @property LineChartDefaultSeriesSettings|null $DefaultSeriesSettings
 * @property list<SeriesItem>|null $Series
 * @property LegendOptions|null $Legend
 * @property DataLabelOptions|null $DataLabels
 * @property list<ReferenceLine>|null $ReferenceLines
 * @property TooltipOptions|null $Tooltip
 * @property list<ContributionAnalysisDefault>|null $ContributionAnalysisDefaults
 * @property VisualPalette|null $VisualPalette
 * @property VisualInteractionOptions|null $Interactions
 */
class LineChartConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: LineChartFieldWells|null,
     *     SortConfiguration?: LineChartSortConfiguration|null,
     *     ForecastConfigurations?: list<ForecastConfiguration>|null,
     *     Type?: 'LINE'|'AREA'|'STACKED_AREA'|null,
     *     SmallMultiplesOptions?: SmallMultiplesOptions|null,
     *     XAxisDisplayOptions?: AxisDisplayOptions|null,
     *     XAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     PrimaryYAxisDisplayOptions?: LineSeriesAxisDisplayOptions|null,
     *     PrimaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     SecondaryYAxisDisplayOptions?: LineSeriesAxisDisplayOptions|null,
     *     SecondaryYAxisLabelOptions?: ChartAxisLabelOptions|null,
     *     SingleAxisOptions?: SingleAxisOptions|null,
     *     DefaultSeriesSettings?: LineChartDefaultSeriesSettings|null,
     *     Series?: list<SeriesItem>|null,
     *     Legend?: LegendOptions|null,
     *     DataLabels?: DataLabelOptions|null,
     *     ReferenceLines?: list<ReferenceLine>|null,
     *     Tooltip?: TooltipOptions|null,
     *     ContributionAnalysisDefaults?: list<ContributionAnalysisDefault>|null,
     *     VisualPalette?: VisualPalette|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
