<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApiEvents;

trait ListManagedApiEventsTrait
{
    /**
     * @param ListManagedApiEventsRequest $args
     * @return ListManagedApiEventsResponse
     */
    public function listManagedApiEvents(ListManagedApiEventsRequest $args)
    {
        $result = parent::listManagedApiEvents($args->toArray());
        return new ListManagedApiEventsResponse($result->toArray());
    }
}
