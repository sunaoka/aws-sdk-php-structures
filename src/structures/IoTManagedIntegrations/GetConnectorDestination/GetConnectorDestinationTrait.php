<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetConnectorDestination;

trait GetConnectorDestinationTrait
{
    /**
     * @param GetConnectorDestinationRequest $args
     * @return GetConnectorDestinationResponse
     */
    public function getConnectorDestination(GetConnectorDestinationRequest $args)
    {
        $result = parent::getConnectorDestination($args->toArray());
        return new GetConnectorDestinationResponse($result->toArray());
    }
}
