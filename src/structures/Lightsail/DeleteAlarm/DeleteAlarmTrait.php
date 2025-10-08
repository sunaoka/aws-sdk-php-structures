<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteAlarm;

trait DeleteAlarmTrait
{
    /**
     * @param DeleteAlarmRequest $args
     * @return DeleteAlarmResponse
     */
    public function deleteAlarm(DeleteAlarmRequest $args)
    {
        $result = parent::deleteAlarm($args->toArray());
        return new DeleteAlarmResponse($result->toArray());
    }
}
