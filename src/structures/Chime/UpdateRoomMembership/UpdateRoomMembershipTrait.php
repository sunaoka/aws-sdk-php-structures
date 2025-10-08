<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership;

trait UpdateRoomMembershipTrait
{
    /**
     * @param UpdateRoomMembershipRequest $args
     * @return UpdateRoomMembershipResponse
     */
    public function updateRoomMembership(UpdateRoomMembershipRequest $args)
    {
        $result = parent::updateRoomMembership($args->toArray());
        return new UpdateRoomMembershipResponse($result->toArray());
    }
}
