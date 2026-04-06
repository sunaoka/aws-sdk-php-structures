<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteEventTrigger;

trait DeleteEventTriggerTrait
{
    /**
     * @param DeleteEventTriggerRequest $args
     * @return DeleteEventTriggerResponse
     */
    public function deleteEventTrigger(DeleteEventTriggerRequest $args)
    {
        $result = parent::deleteEventTrigger($args->toArray());
        return new DeleteEventTriggerResponse($result->toArray());
    }
}
