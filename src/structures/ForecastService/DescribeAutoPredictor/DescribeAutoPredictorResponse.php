<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PredictorArn
 * @property string|null $PredictorName
 * @property int|null $ForecastHorizon
 * @property list<string>|null $ForecastTypes
 * @property string|null $ForecastFrequency
 * @property list<string>|null $ForecastDimensions
 * @property list<string>|null $DatasetImportJobArns
 * @property Shapes\DataConfig|null $DataConfig
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property Shapes\ReferencePredictorSummary|null $ReferencePredictorSummary
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property 'WAPE'|'RMSE'|'AverageWeightedQuantileLoss'|'MASE'|'MAPE'|null $OptimizationMetric
 * @property Shapes\ExplainabilityInfo|null $ExplainabilityInfo
 * @property Shapes\MonitorInfo|null $MonitorInfo
 * @property Shapes\TimeAlignmentBoundary|null $TimeAlignmentBoundary
 */
class DescribeAutoPredictorResponse extends Response
{
}
