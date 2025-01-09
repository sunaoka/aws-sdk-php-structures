<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MonitorName
 * @property string $MonitorArn
 * @property string $ResourceArn
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $LastEvaluationTime
 * @property string $LastEvaluationState
 * @property Shapes\Baseline $Baseline
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 * @property int $EstimatedEvaluationTimeRemainingInMinutes
 */
class DescribeMonitorResponse extends Response
{
}
