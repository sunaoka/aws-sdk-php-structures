<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlertHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoringScheduleName
 * @property string $MonitoringAlertName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'InAlert'|'OK' $AlertStatus
 */
class MonitoringAlertHistorySummary extends Shape
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringAlertName: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     AlertStatus: 'InAlert'|'OK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
