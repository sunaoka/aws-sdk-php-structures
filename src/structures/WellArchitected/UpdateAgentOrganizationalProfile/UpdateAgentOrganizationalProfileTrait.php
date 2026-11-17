<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentOrganizationalProfile;

trait UpdateAgentOrganizationalProfileTrait
{
    /**
     * @param UpdateAgentOrganizationalProfileRequest $args
     * @return UpdateAgentOrganizationalProfileResponse
     */
    public function updateAgentOrganizationalProfile(UpdateAgentOrganizationalProfileRequest $args)
    {
        $result = parent::updateAgentOrganizationalProfile($args->toArray());
        return new UpdateAgentOrganizationalProfileResponse($result->toArray());
    }
}
