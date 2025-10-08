<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexesForMembers;

trait ListIndexesForMembersTrait
{
    /**
     * @param ListIndexesForMembersRequest $args
     * @return ListIndexesForMembersResponse
     */
    public function listIndexesForMembers(ListIndexesForMembersRequest $args)
    {
        $result = parent::listIndexesForMembers($args->toArray());
        return new ListIndexesForMembersResponse($result->toArray());
    }
}
