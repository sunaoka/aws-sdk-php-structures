<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PredictorArn
 * @property string $PredictorName
 * @property int $ForecastHorizon
 * @property list<string> $ForecastTypes
 * @property string $ForecastFrequency
 * @property list<string> $ForecastDimensions
 * @property list<string> $DatasetImportJobArns
 * @property Shapes\DataConfig $DataConfig
 * @property Shapes\EncryptionConfig $EncryptionConfig
 * @property Shapes\ReferencePredictorSummary $ReferencePredictorSummary
 * @property int $EstimatedTimeRemainingInMinutes
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE' $OptimizationMetric
 * @property Shapes\ExplainabilityInfo $ExplainabilityInfo
 * @property Shapes\MonitorInfo $MonitorInfo
 * @property Shapes\TimeAlignmentBoundary $TimeAlignmentBoundary
 */
class DescribeAutoPredictorResponse extends Response
{
}
