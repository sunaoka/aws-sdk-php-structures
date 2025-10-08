<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationEvent;

trait GetDataIntegrationEventTrait
{
    /**
     * @param GetDataIntegrationEventRequest $args
     * @return GetDataIntegrationEventResponse
     */
    public function getDataIntegrationEvent(GetDataIntegrationEventRequest $args)
    {
        $result = parent::getDataIntegrationEvent($args->toArray());
        return new GetDataIntegrationEventResponse($result->toArray());
    }
}
