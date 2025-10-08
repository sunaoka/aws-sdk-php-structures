<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateEventTracker;

trait CreateEventTrackerTrait
{
    /**
     * @param CreateEventTrackerRequest $args
     * @return CreateEventTrackerResponse
     */
    public function createEventTracker(CreateEventTrackerRequest $args)
    {
        $result = parent::createEventTracker($args->toArray());
        return new CreateEventTrackerResponse($result->toArray());
    }
}
