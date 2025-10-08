<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateApiDestination;

trait CreateApiDestinationTrait
{
    /**
     * @param CreateApiDestinationRequest $args
     * @return CreateApiDestinationResponse
     */
    public function createApiDestination(CreateApiDestinationRequest $args)
    {
        $result = parent::createApiDestination($args->toArray());
        return new CreateApiDestinationResponse($result->toArray());
    }
}
