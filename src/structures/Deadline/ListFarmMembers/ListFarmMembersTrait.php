<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarmMembers;

trait ListFarmMembersTrait
{
    /**
     * @param ListFarmMembersRequest $args
     * @return ListFarmMembersResponse
     */
    public function listFarmMembers(ListFarmMembersRequest $args)
    {
        $result = parent::listFarmMembers($args->toArray());
        return new ListFarmMembersResponse($result->toArray());
    }
}
