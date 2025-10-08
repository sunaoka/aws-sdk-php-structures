<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchSnoozeAlarm;

trait BatchSnoozeAlarmTrait
{
    /**
     * @param BatchSnoozeAlarmRequest $args
     * @return BatchSnoozeAlarmResponse
     */
    public function batchSnoozeAlarm(BatchSnoozeAlarmRequest $args)
    {
        $result = parent::batchSnoozeAlarm($args->toArray());
        return new BatchSnoozeAlarmResponse($result->toArray());
    }
}
