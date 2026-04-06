<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches;

trait ListLaunchesTrait
{
    /**
     * @param ListLaunchesRequest $args
     * @return ListLaunchesResponse
     */
    public function listLaunches(ListLaunchesRequest $args)
    {
        $result = parent::listLaunches($args->toArray());
        return new ListLaunchesResponse($result->toArray());
    }
}
