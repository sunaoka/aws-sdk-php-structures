<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetLaunch;

trait GetLaunchTrait
{
    /**
     * @param GetLaunchRequest $args
     * @return GetLaunchResponse
     */
    public function getLaunch(GetLaunchRequest $args)
    {
        $result = parent::getLaunch($args->toArray());
        return new GetLaunchResponse($result->toArray());
    }
}
