<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentOrganizationalProfile;

trait CreateAgentOrganizationalProfileTrait
{
    /**
     * @param CreateAgentOrganizationalProfileRequest $args
     * @return CreateAgentOrganizationalProfileResponse
     */
    public function createAgentOrganizationalProfile(CreateAgentOrganizationalProfileRequest $args)
    {
        $result = parent::createAgentOrganizationalProfile($args->toArray());
        return new CreateAgentOrganizationalProfileResponse($result->toArray());
    }
}
