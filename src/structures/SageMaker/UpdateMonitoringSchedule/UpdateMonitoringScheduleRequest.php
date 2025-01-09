<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property Shapes\MonitoringScheduleConfig $MonitoringScheduleConfig
 */
class UpdateMonitoringScheduleRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringScheduleConfig: Shapes\MonitoringScheduleConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
