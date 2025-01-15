<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\EvaluationResult>|null $PredictorEvaluationResults
 * @property bool|null $IsAutoPredictor
 * @property 'LatencyOptimized'|'AccuracyOptimized'|null $AutoMLOverrideStrategy
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null $OptimizationMetric
 */
class GetAccuracyMetricsResponse extends Response
{
}
