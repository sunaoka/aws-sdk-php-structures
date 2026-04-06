<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopLaunch;

trait StopLaunchTrait
{
    /**
     * @param StopLaunchRequest $args
     * @return StopLaunchResponse
     */
    public function stopLaunch(StopLaunchRequest $args)
    {
        $result = parent::stopLaunch($args->toArray());
        return new StopLaunchResponse($result->toArray());
    }
}
