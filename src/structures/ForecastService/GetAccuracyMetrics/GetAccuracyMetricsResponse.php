<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\EvaluationResult> $PredictorEvaluationResults
 * @property bool $IsAutoPredictor
 * @property 'LatencyOptimized'|'AccuracyOptimized' $AutoMLOverrideStrategy
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE' $OptimizationMetric
 */
class GetAccuracyMetricsResponse extends Response
{
}
