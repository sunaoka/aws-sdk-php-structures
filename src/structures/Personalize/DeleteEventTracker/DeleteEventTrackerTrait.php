<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteEventTracker;

trait DeleteEventTrackerTrait
{
    /**
     * @param DeleteEventTrackerRequest $args
     * @return void
     */
    public function deleteEventTracker(DeleteEventTrackerRequest $args)
    {
        parent::deleteEventTracker($args->toArray());
    }
}
