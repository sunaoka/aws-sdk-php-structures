<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentProfile;

trait UpdateAgentProfileTrait
{
    /**
     * @param UpdateAgentProfileRequest $args
     * @return UpdateAgentProfileResponse
     */
    public function updateAgentProfile(UpdateAgentProfileRequest $args)
    {
        $result = parent::updateAgentProfile($args->toArray());
        return new UpdateAgentProfileResponse($result->toArray());
    }
}
