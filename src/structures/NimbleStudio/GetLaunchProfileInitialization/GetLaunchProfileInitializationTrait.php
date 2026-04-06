<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileInitialization;

trait GetLaunchProfileInitializationTrait
{
    /**
     * @param GetLaunchProfileInitializationRequest $args
     * @return GetLaunchProfileInitializationResponse
     */
    public function getLaunchProfileInitialization(GetLaunchProfileInitializationRequest $args)
    {
        $result = parent::getLaunchProfileInitialization($args->toArray());
        return new GetLaunchProfileInitializationResponse($result->toArray());
    }
}
