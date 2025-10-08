<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateRoomMembership;

trait BatchCreateRoomMembershipTrait
{
    /**
     * @param BatchCreateRoomMembershipRequest $args
     * @return BatchCreateRoomMembershipResponse
     */
    public function batchCreateRoomMembership(BatchCreateRoomMembershipRequest $args)
    {
        $result = parent::batchCreateRoomMembership($args->toArray());
        return new BatchCreateRoomMembershipResponse($result->toArray());
    }
}
