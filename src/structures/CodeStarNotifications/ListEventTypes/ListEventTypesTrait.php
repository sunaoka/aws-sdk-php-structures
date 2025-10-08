<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes;

trait ListEventTypesTrait
{
    /**
     * @param ListEventTypesRequest $args
     * @return ListEventTypesResponse
     */
    public function listEventTypes(ListEventTypesRequest $args)
    {
        $result = parent::listEventTypes($args->toArray());
        return new ListEventTypesResponse($result->toArray());
    }
}
