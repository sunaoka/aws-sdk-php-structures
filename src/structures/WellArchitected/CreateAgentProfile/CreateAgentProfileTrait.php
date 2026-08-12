<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentProfile;

trait CreateAgentProfileTrait
{
    /**
     * @param CreateAgentProfileRequest $args
     * @return CreateAgentProfileResponse
     */
    public function createAgentProfile(CreateAgentProfileRequest $args)
    {
        $result = parent::createAgentProfile($args->toArray());
        return new CreateAgentProfileResponse($result->toArray());
    }
}
