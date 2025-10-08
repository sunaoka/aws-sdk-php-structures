<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteRoomMembership;

trait DeleteRoomMembershipTrait
{
    /**
     * @param DeleteRoomMembershipRequest $args
     * @return void
     */
    public function deleteRoomMembership(DeleteRoomMembershipRequest $args)
    {
        parent::deleteRoomMembership($args->toArray());
    }
}
