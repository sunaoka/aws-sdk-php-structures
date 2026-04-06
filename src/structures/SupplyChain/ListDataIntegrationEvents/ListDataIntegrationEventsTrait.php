<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationEvents;

trait ListDataIntegrationEventsTrait
{
    /**
     * @param ListDataIntegrationEventsRequest $args
     * @return ListDataIntegrationEventsResponse
     */
    public function listDataIntegrationEvents(ListDataIntegrationEventsRequest $args)
    {
        $result = parent::listDataIntegrationEvents($args->toArray());
        return new ListDataIntegrationEventsResponse($result->toArray());
    }
}
