<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRoleMembership;

trait CreateRoleMembershipTrait
{
    /**
     * @param CreateRoleMembershipRequest $args
     * @return CreateRoleMembershipResponse
     */
    public function createRoleMembership(CreateRoleMembershipRequest $args)
    {
        $result = parent::createRoleMembership($args->toArray());
        return new CreateRoleMembershipResponse($result->toArray());
    }
}
