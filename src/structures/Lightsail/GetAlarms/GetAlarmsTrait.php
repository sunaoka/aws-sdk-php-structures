<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAlarms;

trait GetAlarmsTrait
{
    /**
     * @param GetAlarmsRequest $args
     * @return GetAlarmsResponse
     */
    public function getAlarms(GetAlarmsRequest $args)
    {
        $result = parent::getAlarms($args->toArray());
        return new GetAlarmsResponse($result->toArray());
    }
}
