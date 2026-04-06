<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent;

trait SendChatIntegrationEventTrait
{
    /**
     * @param SendChatIntegrationEventRequest $args
     * @return SendChatIntegrationEventResponse
     */
    public function sendChatIntegrationEvent(SendChatIntegrationEventRequest $args)
    {
        $result = parent::sendChatIntegrationEvent($args->toArray());
        return new SendChatIntegrationEventResponse($result->toArray());
    }
}
