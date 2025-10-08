<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdatePublishingDestination;

trait UpdatePublishingDestinationTrait
{
    /**
     * @param UpdatePublishingDestinationRequest $args
     * @return UpdatePublishingDestinationResponse
     */
    public function updatePublishingDestination(UpdatePublishingDestinationRequest $args)
    {
        $result = parent::updatePublishingDestination($args->toArray());
        return new UpdatePublishingDestinationResponse($result->toArray());
    }
}
