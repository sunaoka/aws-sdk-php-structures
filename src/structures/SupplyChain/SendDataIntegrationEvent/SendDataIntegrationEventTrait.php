<?php

namespace Sunaoka\Aws\Structures\SupplyChain\SendDataIntegrationEvent;

trait SendDataIntegrationEventTrait
{
    /**
     * @param SendDataIntegrationEventRequest $args
     * @return SendDataIntegrationEventResponse
     */
    public function sendDataIntegrationEvent(SendDataIntegrationEventRequest $args)
    {
        $result = parent::sendDataIntegrationEvent($args->toArray());
        return new SendDataIntegrationEventResponse($result->toArray());
    }
}
