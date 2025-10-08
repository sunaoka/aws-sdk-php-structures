<?php

namespace Sunaoka\Aws\Structures\drs\StartFailbackLaunch;

trait StartFailbackLaunchTrait
{
    /**
     * @param StartFailbackLaunchRequest $args
     * @return StartFailbackLaunchResponse
     */
    public function startFailbackLaunch(StartFailbackLaunchRequest $args)
    {
        $result = parent::startFailbackLaunch($args->toArray());
        return new StartFailbackLaunchResponse($result->toArray());
    }
}
