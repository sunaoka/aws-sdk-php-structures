<?php

namespace Sunaoka\Aws\Structures\Lightsail\PutAlarm;

trait PutAlarmTrait
{
    /**
     * @param PutAlarmRequest $args
     * @return PutAlarmResponse
     */
    public function putAlarm(PutAlarmRequest $args)
    {
        $result = parent::putAlarm($args->toArray());
        return new PutAlarmResponse($result->toArray());
    }
}
