<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WhatIfForecastName
 * @property string $WhatIfForecastArn
 * @property string $WhatIfAnalysisArn
 * @property int $EstimatedTimeRemainingInMinutes
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property list<Shapes\TimeSeriesTransformation> $TimeSeriesTransformations
 * @property Shapes\TimeSeriesReplacementsDataSource $TimeSeriesReplacementsDataSource
 * @property list<string> $ForecastTypes
 */
class DescribeWhatIfForecastResponse extends Response
{
}
