<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateGroupMembership;

trait CreateGroupMembershipTrait
{
    /**
     * @param CreateGroupMembershipRequest $args
     * @return CreateGroupMembershipResponse
     */
    public function createGroupMembership(CreateGroupMembershipRequest $args)
    {
        $result = parent::createGroupMembership($args->toArray());
        return new CreateGroupMembershipResponse($result->toArray());
    }
}
