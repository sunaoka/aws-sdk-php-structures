<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateTracker;

trait CreateTrackerTrait
{
    /**
     * @param CreateTrackerRequest $args
     * @return CreateTrackerResponse
     */
    public function createTracker(CreateTrackerRequest $args)
    {
        $result = parent::createTracker($args->toArray());
        return new CreateTrackerResponse($result->toArray());
    }
}
