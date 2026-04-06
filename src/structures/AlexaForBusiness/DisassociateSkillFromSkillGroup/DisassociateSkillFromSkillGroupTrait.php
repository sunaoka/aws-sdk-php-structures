<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DisassociateSkillFromSkillGroup;

trait DisassociateSkillFromSkillGroupTrait
{
    /**
     * @param DisassociateSkillFromSkillGroupRequest $args
     * @return DisassociateSkillFromSkillGroupResponse
     */
    public function disassociateSkillFromSkillGroup(DisassociateSkillFromSkillGroupRequest $args)
    {
        $result = parent::disassociateSkillFromSkillGroup($args->toArray());
        return new DisassociateSkillFromSkillGroupResponse($result->toArray());
    }
}
