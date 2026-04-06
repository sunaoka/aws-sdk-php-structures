<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRoleMembership;

trait DeleteRoleMembershipTrait
{
    /**
     * @param DeleteRoleMembershipRequest $args
     * @return DeleteRoleMembershipResponse
     */
    public function deleteRoleMembership(DeleteRoleMembershipRequest $args)
    {
        $result = parent::deleteRoleMembership($args->toArray());
        return new DeleteRoleMembershipResponse($result->toArray());
    }
}
