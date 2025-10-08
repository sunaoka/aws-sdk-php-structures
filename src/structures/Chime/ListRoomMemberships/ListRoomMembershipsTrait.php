<?php

namespace Sunaoka\Aws\Structures\Chime\ListRoomMemberships;

trait ListRoomMembershipsTrait
{
    /**
     * @param ListRoomMembershipsRequest $args
     * @return ListRoomMembershipsResponse
     */
    public function listRoomMemberships(ListRoomMembershipsRequest $args)
    {
        $result = parent::listRoomMemberships($args->toArray());
        return new ListRoomMembershipsResponse($result->toArray());
    }
}
