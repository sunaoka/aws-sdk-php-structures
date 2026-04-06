<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateConnectorDestination;

trait CreateConnectorDestinationTrait
{
    /**
     * @param CreateConnectorDestinationRequest $args
     * @return CreateConnectorDestinationResponse
     */
    public function createConnectorDestination(CreateConnectorDestinationRequest $args)
    {
        $result = parent::createConnectorDestination($args->toArray());
        return new CreateConnectorDestinationResponse($result->toArray());
    }
}
