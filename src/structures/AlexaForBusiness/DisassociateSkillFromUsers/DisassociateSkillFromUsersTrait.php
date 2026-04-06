<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillFromUsers;

trait DisassociateSkillFromUsersTrait
{
    /**
     * @param DisassociateSkillFromUsersRequest $args
     * @return DisassociateSkillFromUsersResponse
     */
    public function disassociateSkillFromUsers(DisassociateSkillFromUsersRequest $args)
    {
        $result = parent::disassociateSkillFromUsers($args->toArray());
        return new DisassociateSkillFromUsersResponse($result->toArray());
    }
}
