<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMemberships;

trait ListMembershipsTrait
{
    /**
     * @param ListMembershipsRequest $args
     * @return ListMembershipsResponse
     */
    public function listMemberships(ListMembershipsRequest $args)
    {
        $result = parent::listMemberships($args->toArray());
        return new ListMembershipsResponse($result->toArray());
    }
}
