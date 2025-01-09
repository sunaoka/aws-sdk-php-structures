<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PredictorArn
 * @property string $PredictorName
 * @property string $AlgorithmArn
 * @property list<string> $AutoMLAlgorithmArns
 * @property int $ForecastHorizon
 * @property list<string> $ForecastTypes
 * @property bool $PerformAutoML
 * @property 'LatencyOptimized'|'AccuracyOptimized' $AutoMLOverrideStrategy
 * @property bool $PerformHPO
 * @property array<string, string> $TrainingParameters
 * @property Shapes\EvaluationParameters $EvaluationParameters
 * @property Shapes\HyperParameterTuningJobConfig $HPOConfig
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\FeaturizationConfig $FeaturizationConfig
 * @property Shapes\EncryptionConfig $EncryptionConfig
 * @property Shapes\PredictorExecutionDetails $PredictorExecutionDetails
 * @property int $EstimatedTimeRemainingInMinutes
 * @property bool $IsAutoPredictor
 * @property list<string> $DatasetImportJobArns
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE' $OptimizationMetric
 */
class DescribePredictorResponse extends Response
{
}
