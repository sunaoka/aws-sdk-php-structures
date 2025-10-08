<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDisableAlarm;

trait BatchDisableAlarmTrait
{
    /**
     * @param BatchDisableAlarmRequest $args
     * @return BatchDisableAlarmResponse
     */
    public function batchDisableAlarm(BatchDisableAlarmRequest $args)
    {
        $result = parent::batchDisableAlarm($args->toArray());
        return new BatchDisableAlarmResponse($result->toArray());
    }
}
