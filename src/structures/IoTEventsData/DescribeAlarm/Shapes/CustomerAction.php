<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SNOOZE'|'ENABLE'|'DISABLE'|'ACKNOWLEDGE'|'RESET' $actionName
 * @property SnoozeActionConfiguration $snoozeActionConfiguration
 * @property EnableActionConfiguration $enableActionConfiguration
 * @property DisableActionConfiguration $disableActionConfiguration
 * @property AcknowledgeActionConfiguration $acknowledgeActionConfiguration
 * @property ResetActionConfiguration $resetActionConfiguration
 */
class CustomerAction extends Shape
{
    /**
     * @param array{
     *     actionName?: 'SNOOZE'|'ENABLE'|'DISABLE'|'ACKNOWLEDGE'|'RESET',
     *     snoozeActionConfiguration?: SnoozeActionConfiguration,
     *     enableActionConfiguration?: EnableActionConfiguration,
     *     disableActionConfiguration?: DisableActionConfiguration,
     *     acknowledgeActionConfiguration?: AcknowledgeActionConfiguration,
     *     resetActionConfiguration?: ResetActionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
