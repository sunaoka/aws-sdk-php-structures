<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteApiDestination;

trait DeleteApiDestinationTrait
{
    /**
     * @param DeleteApiDestinationRequest $args
     * @return DeleteApiDestinationResponse
     */
    public function deleteApiDestination(DeleteApiDestinationRequest $args)
    {
        $result = parent::deleteApiDestination($args->toArray());
        return new DeleteApiDestinationResponse($result->toArray());
    }
}
