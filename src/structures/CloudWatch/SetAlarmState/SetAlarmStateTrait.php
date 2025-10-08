<?php

namespace Sunaoka\Aws\Structures\CloudWatch\SetAlarmState;

trait SetAlarmStateTrait
{
    /**
     * @param SetAlarmStateRequest $args
     * @return void
     */
    public function setAlarmState(SetAlarmStateRequest $args)
    {
        parent::setAlarmState($args->toArray());
    }
}
