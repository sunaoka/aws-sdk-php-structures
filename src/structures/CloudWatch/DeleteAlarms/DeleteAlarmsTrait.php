<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAlarms;

trait DeleteAlarmsTrait
{
    /**
     * @param DeleteAlarmsRequest $args
     * @return void
     */
    public function deleteAlarms(DeleteAlarmsRequest $args)
    {
        parent::deleteAlarms($args->toArray());
    }
}
