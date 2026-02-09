<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowserProfile;

trait DeleteBrowserProfileTrait
{
    /**
     * @param DeleteBrowserProfileRequest $args
     * @return DeleteBrowserProfileResponse
     */
    public function deleteBrowserProfile(DeleteBrowserProfileRequest $args)
    {
        $result = parent::deleteBrowserProfile($args->toArray());
        return new DeleteBrowserProfileResponse($result->toArray());
    }
}
