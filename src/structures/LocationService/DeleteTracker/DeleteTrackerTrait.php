<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteTracker;

trait DeleteTrackerTrait
{
    /**
     * @param DeleteTrackerRequest $args
     * @return DeleteTrackerResponse
     */
    public function deleteTracker(DeleteTrackerRequest $args)
    {
        $result = parent::deleteTracker($args->toArray());
        return new DeleteTrackerResponse($result->toArray());
    }
}
