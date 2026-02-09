<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowserProfile;

trait GetBrowserProfileTrait
{
    /**
     * @param GetBrowserProfileRequest $args
     * @return GetBrowserProfileResponse
     */
    public function getBrowserProfile(GetBrowserProfileRequest $args)
    {
        $result = parent::getBrowserProfile($args->toArray());
        return new GetBrowserProfileResponse($result->toArray());
    }
}
