<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricAlarm;

trait PutMetricAlarmTrait
{
    /**
     * @param PutMetricAlarmRequest $args
     * @return void
     */
    public function putMetricAlarm(PutMetricAlarmRequest $args)
    {
        parent::putMetricAlarm($args->toArray());
    }
}
