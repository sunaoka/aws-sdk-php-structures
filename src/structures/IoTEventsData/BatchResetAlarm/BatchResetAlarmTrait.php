<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchResetAlarm;

trait BatchResetAlarmTrait
{
    /**
     * @param BatchResetAlarmRequest $args
     * @return BatchResetAlarmResponse
     */
    public function batchResetAlarm(BatchResetAlarmRequest $args)
    {
        $result = parent::batchResetAlarm($args->toArray());
        return new BatchResetAlarmResponse($result->toArray());
    }
}
