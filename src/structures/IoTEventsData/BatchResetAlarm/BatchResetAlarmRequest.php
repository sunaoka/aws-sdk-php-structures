<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchResetAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ResetAlarmActionRequest> $resetActionRequests
 */
class BatchResetAlarmRequest extends Request
{
    /**
     * @param array{resetActionRequests: list<Shapes\ResetAlarmActionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
