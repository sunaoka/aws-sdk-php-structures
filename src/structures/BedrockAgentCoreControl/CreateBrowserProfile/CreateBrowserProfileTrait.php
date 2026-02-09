<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowserProfile;

trait CreateBrowserProfileTrait
{
    /**
     * @param CreateBrowserProfileRequest $args
     * @return CreateBrowserProfileResponse
     */
    public function createBrowserProfile(CreateBrowserProfileRequest $args)
    {
        $result = parent::createBrowserProfile($args->toArray());
        return new CreateBrowserProfileResponse($result->toArray());
    }
}
