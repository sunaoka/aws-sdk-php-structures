<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroupsForMember;

trait ListGroupsForMemberTrait
{
    /**
     * @param ListGroupsForMemberRequest $args
     * @return ListGroupsForMemberResponse
     */
    public function listGroupsForMember(ListGroupsForMemberRequest $args)
    {
        $result = parent::listGroupsForMember($args->toArray());
        return new ListGroupsForMemberResponse($result->toArray());
    }
}
