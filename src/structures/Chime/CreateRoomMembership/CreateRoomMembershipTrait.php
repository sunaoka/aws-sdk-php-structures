<?php

namespace Sunaoka\Aws\Structures\Chime\CreateRoomMembership;

trait CreateRoomMembershipTrait
{
    /**
     * @param CreateRoomMembershipRequest $args
     * @return CreateRoomMembershipResponse
     */
    public function createRoomMembership(CreateRoomMembershipRequest $args)
    {
        $result = parent::createRoomMembership($args->toArray());
        return new CreateRoomMembershipResponse($result->toArray());
    }
}
