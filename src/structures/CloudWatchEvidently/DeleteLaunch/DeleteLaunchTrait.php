<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteLaunch;

trait DeleteLaunchTrait
{
    /**
     * @param DeleteLaunchRequest $args
     * @return DeleteLaunchResponse
     */
    public function deleteLaunch(DeleteLaunchRequest $args)
    {
        $result = parent::deleteLaunch($args->toArray());
        return new DeleteLaunchResponse($result->toArray());
    }
}
