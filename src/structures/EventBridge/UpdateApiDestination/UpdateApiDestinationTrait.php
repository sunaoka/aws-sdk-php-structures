<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateApiDestination;

trait UpdateApiDestinationTrait
{
    /**
     * @param UpdateApiDestinationRequest $args
     * @return UpdateApiDestinationResponse
     */
    public function updateApiDestination(UpdateApiDestinationRequest $args)
    {
        $result = parent::updateApiDestination($args->toArray());
        return new UpdateApiDestinationResponse($result->toArray());
    }
}
