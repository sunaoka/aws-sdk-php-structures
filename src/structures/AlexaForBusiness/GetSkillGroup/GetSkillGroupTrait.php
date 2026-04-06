<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetSkillGroup;

trait GetSkillGroupTrait
{
    /**
     * @param GetSkillGroupRequest $args
     * @return GetSkillGroupResponse
     */
    public function getSkillGroup(GetSkillGroupRequest $args)
    {
        $result = parent::getSkillGroup($args->toArray());
        return new GetSkillGroupResponse($result->toArray());
    }
}
