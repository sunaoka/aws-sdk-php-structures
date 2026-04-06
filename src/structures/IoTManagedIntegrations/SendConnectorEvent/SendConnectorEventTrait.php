<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent;

trait SendConnectorEventTrait
{
    /**
     * @param SendConnectorEventRequest $args
     * @return SendConnectorEventResponse
     */
    public function sendConnectorEvent(SendConnectorEventRequest $args)
    {
        $result = parent::sendConnectorEvent($args->toArray());
        return new SendConnectorEventResponse($result->toArray());
    }
}
