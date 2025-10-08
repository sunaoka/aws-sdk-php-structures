<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectMembership;

trait CreateProjectMembershipTrait
{
    /**
     * @param CreateProjectMembershipRequest $args
     * @return CreateProjectMembershipResponse
     */
    public function createProjectMembership(CreateProjectMembershipRequest $args)
    {
        $result = parent::createProjectMembership($args->toArray());
        return new CreateProjectMembershipResponse($result->toArray());
    }
}
