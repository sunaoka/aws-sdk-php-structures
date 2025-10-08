<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListApiDestinations;

trait ListApiDestinationsTrait
{
    /**
     * @param ListApiDestinationsRequest $args
     * @return ListApiDestinationsResponse
     */
    public function listApiDestinations(ListApiDestinationsRequest $args)
    {
        $result = parent::listApiDestinations($args->toArray());
        return new ListApiDestinationsResponse($result->toArray());
    }
}
