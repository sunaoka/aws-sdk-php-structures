<?php

namespace Sunaoka\Aws\Structures\Personalize\ListEventTrackers;

trait ListEventTrackersTrait
{
    /**
     * @param ListEventTrackersRequest $args
     * @return ListEventTrackersResponse
     */
    public function listEventTrackers(ListEventTrackersRequest $args)
    {
        $result = parent::listEventTrackers($args->toArray());
        return new ListEventTrackersResponse($result->toArray());
    }
}
