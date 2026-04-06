<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateSkillGroup;

trait CreateSkillGroupTrait
{
    /**
     * @param CreateSkillGroupRequest $args
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroup(CreateSkillGroupRequest $args)
    {
        $result = parent::createSkillGroup($args->toArray());
        return new CreateSkillGroupResponse($result->toArray());
    }
}
