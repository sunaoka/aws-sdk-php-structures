<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ForecastArn
 * @property string $ForecastName
 * @property list<string> $ForecastTypes
 * @property string $PredictorArn
 * @property string $DatasetGroupArn
 * @property int $EstimatedTimeRemainingInMinutes
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property Shapes\TimeSeriesSelector $TimeSeriesSelector
 */
class DescribeForecastResponse extends Response
{
}
