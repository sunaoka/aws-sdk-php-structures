<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListPublishingDestinations;

trait ListPublishingDestinationsTrait
{
    /**
     * @param ListPublishingDestinationsRequest $args
     * @return ListPublishingDestinationsResponse
     */
    public function listPublishingDestinations(ListPublishingDestinationsRequest $args)
    {
        $result = parent::listPublishingDestinations($args->toArray());
        return new ListPublishingDestinationsResponse($result->toArray());
    }
}
