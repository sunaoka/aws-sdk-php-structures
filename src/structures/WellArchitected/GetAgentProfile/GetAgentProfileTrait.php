<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentProfile;

trait GetAgentProfileTrait
{
    /**
     * @param GetAgentProfileRequest $args
     * @return GetAgentProfileResponse
     */
    public function getAgentProfile(GetAgentProfileRequest $args)
    {
        $result = parent::getAgentProfile($args->toArray());
        return new GetAgentProfileResponse($result->toArray());
    }
}
