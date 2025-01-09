<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDisableAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DisableAlarmActionRequest> $disableActionRequests
 */
class BatchDisableAlarmRequest extends Request
{
    /**
     * @param array{disableActionRequests: list<Shapes\DisableAlarmActionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
