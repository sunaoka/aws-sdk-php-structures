<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecastExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ForecastExportJobArn
 * @property string $ForecastExportJobName
 * @property string $ForecastArn
 * @property Shapes\DataDestination $Destination
 * @property string $Message
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property string $Format
 */
class DescribeForecastExportJobResponse extends Response
{
}
