<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateApiDestination;

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
