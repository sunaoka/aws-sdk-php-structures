<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateTracker;

trait UpdateTrackerTrait
{
    /**
     * @param UpdateTrackerRequest $args
     * @return UpdateTrackerResponse
     */
    public function updateTracker(UpdateTrackerRequest $args)
    {
        $result = parent::updateTracker($args->toArray());
        return new UpdateTrackerResponse($result->toArray());
    }
}
