<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 */
class DescribeMonitoringScheduleRequest extends Request
{
    /**
     * @param array{MonitoringScheduleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
