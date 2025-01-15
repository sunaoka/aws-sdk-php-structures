<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SNOOZE'|'ENABLE'|'DISABLE'|'ACKNOWLEDGE'|'RESET'|null $actionName
 * @property SnoozeActionConfiguration|null $snoozeActionConfiguration
 * @property EnableActionConfiguration|null $enableActionConfiguration
 * @property DisableActionConfiguration|null $disableActionConfiguration
 * @property AcknowledgeActionConfiguration|null $acknowledgeActionConfiguration
 * @property ResetActionConfiguration|null $resetActionConfiguration
 */
class CustomerAction extends Shape
{
    /**
     * @param array{
     *     actionName?: 'SNOOZE'|'ENABLE'|'DISABLE'|'ACKNOWLEDGE'|'RESET'|null,
     *     snoozeActionConfiguration?: SnoozeActionConfiguration|null,
     *     enableActionConfiguration?: EnableActionConfiguration|null,
     *     disableActionConfiguration?: DisableActionConfiguration|null,
     *     acknowledgeActionConfiguration?: AcknowledgeActionConfiguration|null,
     *     resetActionConfiguration?: ResetActionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
