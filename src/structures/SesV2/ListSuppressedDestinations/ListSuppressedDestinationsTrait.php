<?php

namespace Sunaoka\Aws\Structures\SesV2\ListSuppressedDestinations;

trait ListSuppressedDestinationsTrait
{
    /**
     * @param ListSuppressedDestinationsRequest $args
     * @return ListSuppressedDestinationsResponse
     */
    public function listSuppressedDestinations(ListSuppressedDestinationsRequest $args)
    {
        $result = parent::listSuppressedDestinations($args->toArray());
        return new ListSuppressedDestinationsResponse($result->toArray());
    }
}
