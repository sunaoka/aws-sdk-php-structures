<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PredictorArn
 * @property string|null $PredictorName
 * @property string|null $AlgorithmArn
 * @property list<string>|null $AutoMLAlgorithmArns
 * @property int|null $ForecastHorizon
 * @property list<string>|null $ForecastTypes
 * @property bool|null $PerformAutoML
 * @property 'LatencyOptimized'|'AccuracyOptimized'|null $AutoMLOverrideStrategy
 * @property bool|null $PerformHPO
 * @property array<string, string>|null $TrainingParameters
 * @property Shapes\EvaluationParameters|null $EvaluationParameters
 * @property Shapes\HyperParameterTuningJobConfig|null $HPOConfig
 * @property Shapes\InputDataConfig|null $InputDataConfig
 * @property Shapes\FeaturizationConfig|null $FeaturizationConfig
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property Shapes\PredictorExecutionDetails|null $PredictorExecutionDetails
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property bool|null $IsAutoPredictor
 * @property list<string>|null $DatasetImportJobArns
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null $OptimizationMetric
 */
class DescribePredictorResponse extends Response
{
}
