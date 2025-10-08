<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutCompositeAlarm;

trait PutCompositeAlarmTrait
{
    /**
     * @param PutCompositeAlarmRequest $args
     * @return void
     */
    public function putCompositeAlarm(PutCompositeAlarmRequest $args)
    {
        parent::putCompositeAlarm($args->toArray());
    }
}
