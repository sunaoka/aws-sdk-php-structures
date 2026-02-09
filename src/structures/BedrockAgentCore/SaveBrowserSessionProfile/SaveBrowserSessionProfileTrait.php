<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\SaveBrowserSessionProfile;

trait SaveBrowserSessionProfileTrait
{
    /**
     * @param SaveBrowserSessionProfileRequest $args
     * @return SaveBrowserSessionProfileResponse
     */
    public function saveBrowserSessionProfile(SaveBrowserSessionProfileRequest $args)
    {
        $result = parent::saveBrowserSessionProfile($args->toArray());
        return new SaveBrowserSessionProfileResponse($result->toArray());
    }
}
