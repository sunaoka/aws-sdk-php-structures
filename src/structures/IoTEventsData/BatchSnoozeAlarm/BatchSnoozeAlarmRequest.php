<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchSnoozeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SnoozeAlarmActionRequest> $snoozeActionRequests
 */
class BatchSnoozeAlarmRequest extends Request
{
    /**
     * @param array{snoozeActionRequests: list<Shapes\SnoozeAlarmActionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
