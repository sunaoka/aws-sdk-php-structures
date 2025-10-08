<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListGroupMemberships;

trait ListGroupMembershipsTrait
{
    /**
     * @param ListGroupMembershipsRequest $args
     * @return ListGroupMembershipsResponse
     */
    public function listGroupMemberships(ListGroupMembershipsRequest $args)
    {
        $result = parent::listGroupMemberships($args->toArray());
        return new ListGroupMembershipsResponse($result->toArray());
    }
}
