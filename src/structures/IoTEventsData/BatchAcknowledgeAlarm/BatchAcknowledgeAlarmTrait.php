<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchAcknowledgeAlarm;

trait BatchAcknowledgeAlarmTrait
{
    /**
     * @param BatchAcknowledgeAlarmRequest $args
     * @return BatchAcknowledgeAlarmResponse
     */
    public function batchAcknowledgeAlarm(BatchAcknowledgeAlarmRequest $args)
    {
        $result = parent::batchAcknowledgeAlarm($args->toArray());
        return new BatchAcknowledgeAlarmResponse($result->toArray());
    }
}
