<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PredictorBacktestExportJobArn
 * @property string $PredictorBacktestExportJobName
 * @property string $PredictorArn
 * @property Shapes\DataDestination $Destination
 * @property string $Message
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property string $Format
 */
class DescribePredictorBacktestExportJobResponse extends Response
{
}
