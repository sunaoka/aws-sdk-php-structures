<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MonitoringScheduleArn
 * @property string $MonitoringScheduleName
 * @property 'Pending'|'Failed'|'Scheduled'|'Stopped' $MonitoringScheduleStatus
 * @property 'DataQuality'|'ModelQuality'|'ModelBias'|'ModelExplainability'|null $MonitoringType
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\MonitoringScheduleConfig $MonitoringScheduleConfig
 * @property string|null $EndpointName
 * @property Shapes\MonitoringExecutionSummary|null $LastMonitoringExecutionSummary
 */
class DescribeMonitoringScheduleResponse extends Response
{
}
