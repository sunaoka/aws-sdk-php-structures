<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutLogAlarm;

trait PutLogAlarmTrait
{
    /**
     * @param PutLogAlarmRequest $args
     * @return void
     */
    public function putLogAlarm(PutLogAlarmRequest $args)
    {
        parent::putLogAlarm($args->toArray());
    }
}
