<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MonitorName
 * @property string|null $MonitorArn
 * @property string|null $ResourceArn
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastEvaluationTime
 * @property string|null $LastEvaluationState
 * @property Shapes\Baseline|null $Baseline
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 * @property int|null $EstimatedEvaluationTimeRemainingInMinutes
 */
class DescribeMonitorResponse extends Response
{
}
