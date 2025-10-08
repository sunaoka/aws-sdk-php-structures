<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupMembers;

trait ListGroupMembersTrait
{
    /**
     * @param ListGroupMembersRequest $args
     * @return ListGroupMembersResponse
     */
    public function listGroupMembers(ListGroupMembersRequest $args)
    {
        $result = parent::listGroupMembers($args->toArray());
        return new ListGroupMembersResponse($result->toArray());
    }
}
