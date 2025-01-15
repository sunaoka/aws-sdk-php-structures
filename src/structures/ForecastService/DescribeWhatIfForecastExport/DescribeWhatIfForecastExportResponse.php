<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecastExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WhatIfForecastExportArn
 * @property string|null $WhatIfForecastExportName
 * @property list<string>|null $WhatIfForecastArns
 * @property Shapes\DataDestination|null $Destination
 * @property string|null $Message
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property int|null $EstimatedTimeRemainingInMinutes
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property string|null $Format
 */
class DescribeWhatIfForecastExportResponse extends Response
{
}
