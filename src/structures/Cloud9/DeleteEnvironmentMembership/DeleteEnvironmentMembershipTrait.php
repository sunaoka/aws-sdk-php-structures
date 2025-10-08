<?php

namespace Sunaoka\Aws\Structures\Cloud9\DeleteEnvironmentMembership;

trait DeleteEnvironmentMembershipTrait
{
    /**
     * @param DeleteEnvironmentMembershipRequest $args
     * @return DeleteEnvironmentMembershipResponse
     */
    public function deleteEnvironmentMembership(DeleteEnvironmentMembershipRequest $args)
    {
        $result = parent::deleteEnvironmentMembership($args->toArray());
        return new DeleteEnvironmentMembershipResponse($result->toArray());
    }
}
