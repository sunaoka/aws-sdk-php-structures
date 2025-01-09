<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 */
class StopMonitoringScheduleRequest extends Request
{
    /**
     * @param array{MonitoringScheduleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
