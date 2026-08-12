<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteAgentProfile;

trait DeleteAgentProfileTrait
{
    /**
     * @param DeleteAgentProfileRequest $args
     * @return DeleteAgentProfileResponse
     */
    public function deleteAgentProfile(DeleteAgentProfileRequest $args)
    {
        $result = parent::deleteAgentProfile($args->toArray());
        return new DeleteAgentProfileResponse($result->toArray());
    }
}
