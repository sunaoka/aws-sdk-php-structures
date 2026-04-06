<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch;

trait UpdateLaunchTrait
{
    /**
     * @param UpdateLaunchRequest $args
     * @return UpdateLaunchResponse
     */
    public function updateLaunch(UpdateLaunchRequest $args)
    {
        $result = parent::updateLaunch($args->toArray());
        return new UpdateLaunchResponse($result->toArray());
    }
}
