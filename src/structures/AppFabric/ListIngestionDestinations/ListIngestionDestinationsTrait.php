<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestionDestinations;

trait ListIngestionDestinationsTrait
{
    /**
     * @param ListIngestionDestinationsRequest $args
     * @return ListIngestionDestinationsResponse
     */
    public function listIngestionDestinations(ListIngestionDestinationsRequest $args)
    {
        $result = parent::listIngestionDestinations($args->toArray());
        return new ListIngestionDestinationsResponse($result->toArray());
    }
}
