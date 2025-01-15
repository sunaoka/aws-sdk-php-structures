<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PredictorBacktestExportJobArn
 * @property string|null $PredictorBacktestExportJobName
 * @property string|null $PredictorArn
 * @property Shapes\DataDestination|null $Destination
 * @property string|null $Message
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property string|null $Format
 */
class DescribePredictorBacktestExportJobResponse extends Response
{
}
