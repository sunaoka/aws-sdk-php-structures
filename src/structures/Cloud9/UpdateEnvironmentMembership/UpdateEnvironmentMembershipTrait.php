<?php

namespace Sunaoka\Aws\Structures\Cloud9\UpdateEnvironmentMembership;

trait UpdateEnvironmentMembershipTrait
{
    /**
     * @param UpdateEnvironmentMembershipRequest $args
     * @return UpdateEnvironmentMembershipResponse
     */
    public function updateEnvironmentMembership(UpdateEnvironmentMembershipRequest $args)
    {
        $result = parent::updateEnvironmentMembership($args->toArray());
        return new UpdateEnvironmentMembershipResponse($result->toArray());
    }
}
