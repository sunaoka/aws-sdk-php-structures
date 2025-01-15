<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecastExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ForecastExportJobArn
 * @property string|null $ForecastExportJobName
 * @property string|null $ForecastArn
 * @property Shapes\DataDestination|null $Destination
 * @property string|null $Message
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property string|null $Format
 */
class DescribeForecastExportJobResponse extends Response
{
}
