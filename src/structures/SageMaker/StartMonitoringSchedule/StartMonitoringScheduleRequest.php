<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 */
class StartMonitoringScheduleRequest extends Request
{
    /**
     * @param array{MonitoringScheduleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
