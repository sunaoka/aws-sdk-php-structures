<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WhatIfAnalysisName
 * @property string $WhatIfAnalysisArn
 * @property string $ForecastArn
 * @property int $EstimatedTimeRemainingInMinutes
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property Shapes\TimeSeriesSelector $TimeSeriesSelector
 */
class DescribeWhatIfAnalysisResponse extends Response
{
}
