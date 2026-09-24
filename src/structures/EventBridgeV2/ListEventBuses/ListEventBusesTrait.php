<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventBuses;

trait ListEventBusesTrait
{
    /**
     * @param ListEventBusesRequest $args
     * @return ListEventBusesResponse
     */
    public function listEventBuses(ListEventBusesRequest $args)
    {
        $result = parent::listEventBuses($args->toArray());
        return new ListEventBusesResponse($result->toArray());
    }
}
