<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableVisual|null $TableVisual
 * @property PivotTableVisual|null $PivotTableVisual
 * @property BarChartVisual|null $BarChartVisual
 * @property KPIVisual|null $KPIVisual
 * @property PieChartVisual|null $PieChartVisual
 * @property GaugeChartVisual|null $GaugeChartVisual
 * @property LineChartVisual|null $LineChartVisual
 * @property HeatMapVisual|null $HeatMapVisual
 * @property TreeMapVisual|null $TreeMapVisual
 * @property GeospatialMapVisual|null $GeospatialMapVisual
 * @property FilledMapVisual|null $FilledMapVisual
 * @property LayerMapVisual|null $LayerMapVisual
 * @property FunnelChartVisual|null $FunnelChartVisual
 * @property ScatterPlotVisual|null $ScatterPlotVisual
 * @property ComboChartVisual|null $ComboChartVisual
 * @property BoxPlotVisual|null $BoxPlotVisual
 * @property WaterfallVisual|null $WaterfallVisual
 * @property HistogramVisual|null $HistogramVisual
 * @property WordCloudVisual|null $WordCloudVisual
 * @property InsightVisual|null $InsightVisual
 * @property SankeyDiagramVisual|null $SankeyDiagramVisual
 * @property CustomContentVisual|null $CustomContentVisual
 * @property EmptyVisual|null $EmptyVisual
 * @property RadarChartVisual|null $RadarChartVisual
 * @property PluginVisual|null $PluginVisual
 */
class Visual extends Shape
{
    /**
     * @param array{
     *     TableVisual?: TableVisual|null,
     *     PivotTableVisual?: PivotTableVisual|null,
     *     BarChartVisual?: BarChartVisual|null,
     *     KPIVisual?: KPIVisual|null,
     *     PieChartVisual?: PieChartVisual|null,
     *     GaugeChartVisual?: GaugeChartVisual|null,
     *     LineChartVisual?: LineChartVisual|null,
     *     HeatMapVisual?: HeatMapVisual|null,
     *     TreeMapVisual?: TreeMapVisual|null,
     *     GeospatialMapVisual?: GeospatialMapVisual|null,
     *     FilledMapVisual?: FilledMapVisual|null,
     *     LayerMapVisual?: LayerMapVisual|null,
     *     FunnelChartVisual?: FunnelChartVisual|null,
     *     ScatterPlotVisual?: ScatterPlotVisual|null,
     *     ComboChartVisual?: ComboChartVisual|null,
     *     BoxPlotVisual?: BoxPlotVisual|null,
     *     WaterfallVisual?: WaterfallVisual|null,
     *     HistogramVisual?: HistogramVisual|null,
     *     WordCloudVisual?: WordCloudVisual|null,
     *     InsightVisual?: InsightVisual|null,
     *     SankeyDiagramVisual?: SankeyDiagramVisual|null,
     *     CustomContentVisual?: CustomContentVisual|null,
     *     EmptyVisual?: EmptyVisual|null,
     *     RadarChartVisual?: RadarChartVisual|null,
     *     PluginVisual?: PluginVisual|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
