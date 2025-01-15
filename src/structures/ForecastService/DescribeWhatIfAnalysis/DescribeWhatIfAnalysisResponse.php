<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfAnalysis;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WhatIfAnalysisName
 * @property string|null $WhatIfAnalysisArn
 * @property string|null $ForecastArn
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property Shapes\TimeSeriesSelector|null $TimeSeriesSelector
 */
class DescribeWhatIfAnalysisResponse extends Response
{
}
