<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ForecastArn
 * @property string|null $ForecastName
 * @property list<string>|null $ForecastTypes
 * @property string|null $PredictorArn
 * @property string|null $DatasetGroupArn
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property Shapes\TimeSeriesSelector|null $TimeSeriesSelector
 */
class DescribeForecastResponse extends Response
{
}
