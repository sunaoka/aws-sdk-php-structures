<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlerts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringAlertName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'InAlert'|'OK' $AlertStatus
 * @property int $DatapointsToAlert
 * @property int $EvaluationPeriod
 * @property MonitoringAlertActions $Actions
 */
class MonitoringAlertSummary extends Shape
{
    /**
     * @param array{
     *     MonitoringAlertName: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     AlertStatus: 'InAlert'|'OK',
     *     DatapointsToAlert: int,
     *     EvaluationPeriod: int,
     *     Actions: MonitoringAlertActions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
