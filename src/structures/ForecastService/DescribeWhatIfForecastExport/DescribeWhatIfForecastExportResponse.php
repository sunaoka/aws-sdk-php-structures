<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecastExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WhatIfForecastExportArn
 * @property string $WhatIfForecastExportName
 * @property list<string> $WhatIfForecastArns
 * @property Shapes\DataDestination $Destination
 * @property string $Message
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $EstimatedTimeRemainingInMinutes
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property string $Format
 */
class DescribeWhatIfForecastExportResponse extends Response
{
}
