<?php

namespace Sunaoka\Aws\Structures\CodeStar\DisassociateTeamMember;

trait DisassociateTeamMemberTrait
{
    /**
     * @param DisassociateTeamMemberRequest $args
     * @return DisassociateTeamMemberResponse
     */
    public function disassociateTeamMember(DisassociateTeamMemberRequest $args)
    {
        $result = parent::disassociateTeamMember($args->toArray());
        return new DisassociateTeamMemberResponse($result->toArray());
    }
}
