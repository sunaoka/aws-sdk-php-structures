<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch;

trait CreateLaunchTrait
{
    /**
     * @param CreateLaunchRequest $args
     * @return CreateLaunchResponse
     */
    public function createLaunch(CreateLaunchRequest $args)
    {
        $result = parent::createLaunch($args->toArray());
        return new CreateLaunchResponse($result->toArray());
    }
}
