<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchEnableAlarm;

trait BatchEnableAlarmTrait
{
    /**
     * @param BatchEnableAlarmRequest $args
     * @return BatchEnableAlarmResponse
     */
    public function batchEnableAlarm(BatchEnableAlarmRequest $args)
    {
        $result = parent::batchEnableAlarm($args->toArray());
        return new BatchEnableAlarmResponse($result->toArray());
    }
}
