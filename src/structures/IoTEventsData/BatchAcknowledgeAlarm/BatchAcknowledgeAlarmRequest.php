<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchAcknowledgeAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AcknowledgeAlarmActionRequest> $acknowledgeActionRequests
 */
class BatchAcknowledgeAlarmRequest extends Request
{
    /**
     * @param array{acknowledgeActionRequests: list<Shapes\AcknowledgeAlarmActionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
