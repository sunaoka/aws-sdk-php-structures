<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteMembership;

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
