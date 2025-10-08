<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StartLaunch;

trait StartLaunchTrait
{
    /**
     * @param StartLaunchRequest $args
     * @return StartLaunchResponse
     */
    public function startLaunch(StartLaunchRequest $args)
    {
        $result = parent::startLaunch($args->toArray());
        return new StartLaunchResponse($result->toArray());
    }
}
