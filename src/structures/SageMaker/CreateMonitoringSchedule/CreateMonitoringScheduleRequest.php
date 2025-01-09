<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMonitoringSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitoringScheduleName
 * @property Shapes\MonitoringScheduleConfig $MonitoringScheduleConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateMonitoringScheduleRequest extends Request
{
    /**
     * @param array{
     *     MonitoringScheduleName: string,
     *     MonitoringScheduleConfig: Shapes\MonitoringScheduleConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
