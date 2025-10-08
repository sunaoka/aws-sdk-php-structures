<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMembershipsForMember;

trait ListGroupMembershipsForMemberTrait
{
    /**
     * @param ListGroupMembershipsForMemberRequest $args
     * @return ListGroupMembershipsForMemberResponse
     */
    public function listGroupMembershipsForMember(ListGroupMembershipsForMemberRequest $args)
    {
        $result = parent::listGroupMembershipsForMember($args->toArray());
        return new ListGroupMembershipsForMemberResponse($result->toArray());
    }
}
