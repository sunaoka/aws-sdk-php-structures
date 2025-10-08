<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeEvents;

trait GetCoreNetworkChangeEventsTrait
{
    /**
     * @param GetCoreNetworkChangeEventsRequest $args
     * @return GetCoreNetworkChangeEventsResponse
     */
    public function getCoreNetworkChangeEvents(GetCoreNetworkChangeEventsRequest $args)
    {
        $result = parent::getCoreNetworkChangeEvents($args->toArray());
        return new GetCoreNetworkChangeEventsResponse($result->toArray());
    }
}
