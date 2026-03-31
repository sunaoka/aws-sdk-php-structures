<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteMembership;

trait DeleteMembershipTrait
{
    /**
     * @param DeleteMembershipRequest $args
     * @return DeleteMembershipResponse
     */
    public function deleteMembership(DeleteMembershipRequest $args)
    {
        $result = parent::deleteMembership($args->toArray());
        return new DeleteMembershipResponse($result->toArray());
    }
}
