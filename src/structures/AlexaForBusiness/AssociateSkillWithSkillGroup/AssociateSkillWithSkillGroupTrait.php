<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateSkillWithSkillGroup;

trait AssociateSkillWithSkillGroupTrait
{
    /**
     * @param AssociateSkillWithSkillGroupRequest $args
     * @return AssociateSkillWithSkillGroupResponse
     */
    public function associateSkillWithSkillGroup(AssociateSkillWithSkillGroupRequest $args)
    {
        $result = parent::associateSkillWithSkillGroup($args->toArray());
        return new AssociateSkillWithSkillGroupResponse($result->toArray());
    }
}
