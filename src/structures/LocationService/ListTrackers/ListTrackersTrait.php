<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackers;

trait ListTrackersTrait
{
    /**
     * @param ListTrackersRequest $args
     * @return ListTrackersResponse
     */
    public function listTrackers(ListTrackersRequest $args)
    {
        $result = parent::listTrackers($args->toArray());
        return new ListTrackersResponse($result->toArray());
    }
}
