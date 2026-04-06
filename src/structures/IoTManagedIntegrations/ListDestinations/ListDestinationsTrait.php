<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListDestinations;

trait ListDestinationsTrait
{
    /**
     * @param ListDestinationsRequest $args
     * @return ListDestinationsResponse
     */
    public function listDestinations(ListDestinationsRequest $args)
    {
        $result = parent::listDestinations($args->toArray());
        return new ListDestinationsResponse($result->toArray());
    }
}
