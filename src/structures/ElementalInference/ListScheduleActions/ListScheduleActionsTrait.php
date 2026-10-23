<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions;

trait ListScheduleActionsTrait
{
    /**
     * @param ListScheduleActionsRequest $args
     * @return ListScheduleActionsResponse
     */
    public function listScheduleActions(ListScheduleActionsRequest $args)
    {
        $result = parent::listScheduleActions($args->toArray());
        return new ListScheduleActionsResponse($result->toArray());
    }
}
