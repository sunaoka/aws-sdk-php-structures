<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger;

trait UpdateEventTriggerTrait
{
    /**
     * @param UpdateEventTriggerRequest $args
     * @return UpdateEventTriggerResponse
     */
    public function updateEventTrigger(UpdateEventTriggerRequest $args)
    {
        $result = parent::updateEventTrigger($args->toArray());
        return new UpdateEventTriggerResponse($result->toArray());
    }
}
