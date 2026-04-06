<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListTeamMembers;

trait ListTeamMembersTrait
{
    /**
     * @param ListTeamMembersRequest $args
     * @return ListTeamMembersResponse
     */
    public function listTeamMembers(ListTeamMembersRequest $args)
    {
        $result = parent::listTeamMembers($args->toArray());
        return new ListTeamMembersResponse($result->toArray());
    }
}
