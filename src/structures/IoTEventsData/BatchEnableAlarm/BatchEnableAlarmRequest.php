<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchEnableAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnableAlarmActionRequest> $enableActionRequests
 */
class BatchEnableAlarmRequest extends Request
{
    /**
     * @param array{enableActionRequests: list<Shapes\EnableAlarmActionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
