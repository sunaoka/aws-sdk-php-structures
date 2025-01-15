<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WhatIfForecastName
 * @property string|null $WhatIfForecastArn
 * @property string|null $WhatIfAnalysisArn
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property list<Shapes\TimeSeriesTransformation>|null $TimeSeriesTransformations
 * @property Shapes\TimeSeriesReplacementsDataSource|null $TimeSeriesReplacementsDataSource
 * @property list<string>|null $ForecastTypes
 */
class DescribeWhatIfForecastResponse extends Response
{
}
