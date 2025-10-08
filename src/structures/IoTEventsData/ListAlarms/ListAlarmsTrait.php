<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\ListAlarms;

trait ListAlarmsTrait
{
    /**
     * @param ListAlarmsRequest $args
     * @return ListAlarmsResponse
     */
    public function listAlarms(ListAlarmsRequest $args)
    {
        $result = parent::listAlarms($args->toArray());
        return new ListAlarmsResponse($result->toArray());
    }
}
