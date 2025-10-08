<?php

namespace Sunaoka\Aws\Structures\CloudWatch\EnableAlarmActions;

trait EnableAlarmActionsTrait
{
    /**
     * @param EnableAlarmActionsRequest $args
     * @return void
     */
    public function enableAlarmActions(EnableAlarmActionsRequest $args)
    {
        parent::enableAlarmActions($args->toArray());
    }
}
