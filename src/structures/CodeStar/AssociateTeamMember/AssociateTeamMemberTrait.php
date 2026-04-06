<?php

namespace Sunaoka\Aws\Structures\CodeStar\AssociateTeamMember;

trait AssociateTeamMemberTrait
{
    /**
     * @param AssociateTeamMemberRequest $args
     * @return AssociateTeamMemberResponse
     */
    public function associateTeamMember(AssociateTeamMemberRequest $args)
    {
        $result = parent::associateTeamMember($args->toArray());
        return new AssociateTeamMemberResponse($result->toArray());
    }
}
