<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRoleMemberships;

trait ListRoleMembershipsTrait
{
    /**
     * @param ListRoleMembershipsRequest $args
     * @return ListRoleMembershipsResponse
     */
    public function listRoleMemberships(ListRoleMembershipsRequest $args)
    {
        $result = parent::listRoleMemberships($args->toArray());
        return new ListRoleMembershipsResponse($result->toArray());
    }
}
