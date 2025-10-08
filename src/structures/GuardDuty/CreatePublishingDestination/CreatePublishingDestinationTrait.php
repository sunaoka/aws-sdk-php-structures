<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreatePublishingDestination;

trait CreatePublishingDestinationTrait
{
    /**
     * @param CreatePublishingDestinationRequest $args
     * @return CreatePublishingDestinationResponse
     */
    public function createPublishingDestination(CreatePublishingDestinationRequest $args)
    {
        $result = parent::createPublishingDestination($args->toArray());
        return new CreatePublishingDestinationResponse($result->toArray());
    }
}
