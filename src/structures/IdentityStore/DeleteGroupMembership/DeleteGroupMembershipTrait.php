<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DeleteGroupMembership;

trait DeleteGroupMembershipTrait
{
    /**
     * @param DeleteGroupMembershipRequest $args
     * @return DeleteGroupMembershipResponse
     */
    public function deleteGroupMembership(DeleteGroupMembershipRequest $args)
    {
        $result = parent::deleteGroupMembership($args->toArray());
        return new DeleteGroupMembershipResponse($result->toArray());
    }
}
