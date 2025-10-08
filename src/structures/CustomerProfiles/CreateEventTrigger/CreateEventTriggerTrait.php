<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger;

trait CreateEventTriggerTrait
{
    /**
     * @param CreateEventTriggerRequest $args
     * @return CreateEventTriggerResponse
     */
    public function createEventTrigger(CreateEventTriggerRequest $args)
    {
        $result = parent::createEventTrigger($args->toArray());
        return new CreateEventTriggerResponse($result->toArray());
    }
}
