<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentBasicProfile;

trait CreateAgentBasicProfileTrait
{
    /**
     * @param CreateAgentBasicProfileRequest $args
     * @return CreateAgentBasicProfileResponse
     */
    public function createAgentBasicProfile(CreateAgentBasicProfileRequest $args)
    {
        $result = parent::createAgentBasicProfile($args->toArray());
        return new CreateAgentBasicProfileResponse($result->toArray());
    }
}
