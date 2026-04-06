<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListConnectorDestinations;

trait ListConnectorDestinationsTrait
{
    /**
     * @param ListConnectorDestinationsRequest $args
     * @return ListConnectorDestinationsResponse
     */
    public function listConnectorDestinations(ListConnectorDestinationsRequest $args)
    {
        $result = parent::listConnectorDestinations($args->toArray());
        return new ListConnectorDestinationsResponse($result->toArray());
    }
}
