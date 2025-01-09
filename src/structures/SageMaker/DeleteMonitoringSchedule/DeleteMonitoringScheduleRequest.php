<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 */
class DeleteMonitoringScheduleRequest extends Request
{
    /**
     * @param array{MonitoringScheduleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
