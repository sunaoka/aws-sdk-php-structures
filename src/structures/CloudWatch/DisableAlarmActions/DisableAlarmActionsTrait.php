<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisableAlarmActions;

trait DisableAlarmActionsTrait
{
    /**
     * @param DisableAlarmActionsRequest $args
     * @return void
     */
    public function disableAlarmActions(DisableAlarmActionsRequest $args)
    {
        parent::disableAlarmActions($args->toArray());
    }
}
