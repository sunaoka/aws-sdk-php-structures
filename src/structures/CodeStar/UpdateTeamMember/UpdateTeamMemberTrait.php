<?php

namespace Sunaoka\Aws\Structures\CodeStar\UpdateTeamMember;

trait UpdateTeamMemberTrait
{
    /**
     * @param UpdateTeamMemberRequest $args
     * @return UpdateTeamMemberResponse
     */
    public function updateTeamMember(UpdateTeamMemberRequest $args)
    {
        $result = parent::updateTeamMember($args->toArray());
        return new UpdateTeamMemberResponse($result->toArray());
    }
}
