<?php

namespace Sunaoka\Aws\Structures\Macie2\ListMembers;

trait ListMembersTrait
{
    /**
     * @param ListMembersRequest $args
     * @return ListMembersResponse
     */
    public function listMembers(ListMembersRequest $args)
    {
        $result = parent::listMembers($args->toArray());
        return new ListMembersResponse($result->toArray());
    }
}
