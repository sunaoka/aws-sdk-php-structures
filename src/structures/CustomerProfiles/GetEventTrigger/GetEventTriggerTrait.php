<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventTrigger;

trait GetEventTriggerTrait
{
    /**
     * @param GetEventTriggerRequest $args
     * @return GetEventTriggerResponse
     */
    public function getEventTrigger(GetEventTriggerRequest $args)
    {
        $result = parent::getEventTrigger($args->toArray());
        return new GetEventTriggerResponse($result->toArray());
    }
}
