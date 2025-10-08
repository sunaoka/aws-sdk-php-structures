<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeletePublishingDestination;

trait DeletePublishingDestinationTrait
{
    /**
     * @param DeletePublishingDestinationRequest $args
     * @return DeletePublishingDestinationResponse
     */
    public function deletePublishingDestination(DeletePublishingDestinationRequest $args)
    {
        $result = parent::deletePublishingDestination($args->toArray());
        return new DeletePublishingDestinationResponse($result->toArray());
    }
}
