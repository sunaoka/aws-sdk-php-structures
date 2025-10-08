<?php

namespace Sunaoka\Aws\Structures\Cloud9\CreateEnvironmentMembership;

trait CreateEnvironmentMembershipTrait
{
    /**
     * @param CreateEnvironmentMembershipRequest $args
     * @return CreateEnvironmentMembershipResponse
     */
    public function createEnvironmentMembership(CreateEnvironmentMembershipRequest $args)
    {
        $result = parent::createEnvironmentMembership($args->toArray());
        return new CreateEnvironmentMembershipResponse($result->toArray());
    }
}
