<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership;

trait UpdateMembershipTrait
{
    /**
     * @param UpdateMembershipRequest $args
     * @return UpdateMembershipResponse
     */
    public function updateMembership(UpdateMembershipRequest $args)
    {
        $result = parent::updateMembership($args->toArray());
        return new UpdateMembershipResponse($result->toArray());
    }
}
