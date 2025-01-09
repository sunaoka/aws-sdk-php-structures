<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableVisual $TableVisual
 * @property PivotTableVisual $PivotTableVisual
 * @property BarChartVisual $BarChartVisual
 * @property KPIVisual $KPIVisual
 * @property PieChartVisual $PieChartVisual
 * @property GaugeChartVisual $GaugeChartVisual
 * @property LineChartVisual $LineChartVisual
 * @property HeatMapVisual $HeatMapVisual
 * @property TreeMapVisual $TreeMapVisual
 * @property GeospatialMapVisual $GeospatialMapVisual
 * @property FilledMapVisual $FilledMapVisual
 * @property LayerMapVisual $LayerMapVisual
 * @property FunnelChartVisual $FunnelChartVisual
 * @property ScatterPlotVisual $ScatterPlotVisual
 * @property ComboChartVisual $ComboChartVisual
 * @property BoxPlotVisual $BoxPlotVisual
 * @property WaterfallVisual $WaterfallVisual
 * @property HistogramVisual $HistogramVisual
 * @property WordCloudVisual $WordCloudVisual
 * @property InsightVisual $InsightVisual
 * @property SankeyDiagramVisual $SankeyDiagramVisual
 * @property CustomContentVisual $CustomContentVisual
 * @property EmptyVisual $EmptyVisual
 * @property RadarChartVisual $RadarChartVisual
 * @property PluginVisual $PluginVisual
 */
class Visual extends Shape
{
    /**
     * @param array{
     *     TableVisual?: TableVisual,
     *     PivotTableVisual?: PivotTableVisual,
     *     BarChartVisual?: BarChartVisual,
     *     KPIVisual?: KPIVisual,
     *     PieChartVisual?: PieChartVisual,
     *     GaugeChartVisual?: GaugeChartVisual,
     *     LineChartVisual?: LineChartVisual,
     *     HeatMapVisual?: HeatMapVisual,
     *     TreeMapVisual?: TreeMapVisual,
     *     GeospatialMapVisual?: GeospatialMapVisual,
     *     FilledMapVisual?: FilledMapVisual,
     *     LayerMapVisual?: LayerMapVisual,
     *     FunnelChartVisual?: FunnelChartVisual,
     *     ScatterPlotVisual?: ScatterPlotVisual,
     *     ComboChartVisual?: ComboChartVisual,
     *     BoxPlotVisual?: BoxPlotVisual,
     *     WaterfallVisual?: WaterfallVisual,
     *     HistogramVisual?: HistogramVisual,
     *     WordCloudVisual?: WordCloudVisual,
     *     InsightVisual?: InsightVisual,
     *     SankeyDiagramVisual?: SankeyDiagramVisual,
     *     CustomContentVisual?: CustomContentVisual,
     *     EmptyVisual?: EmptyVisual,
     *     RadarChartVisual?: RadarChartVisual,
     *     PluginVisual?: PluginVisual
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
