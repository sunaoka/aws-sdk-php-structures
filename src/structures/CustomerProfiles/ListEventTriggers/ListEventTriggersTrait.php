<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListEventTriggers;

trait ListEventTriggersTrait
{
    /**
     * @param ListEventTriggersRequest $args
     * @return ListEventTriggersResponse
     */
    public function listEventTriggers(ListEventTriggersRequest $args)
    {
        $result = parent::listEventTriggers($args->toArray());
        return new ListEventTriggersResponse($result->toArray());
    }
}
