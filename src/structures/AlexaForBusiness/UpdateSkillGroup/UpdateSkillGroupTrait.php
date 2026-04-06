<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateSkillGroup;

trait UpdateSkillGroupTrait
{
    /**
     * @param UpdateSkillGroupRequest $args
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroup(UpdateSkillGroupRequest $args)
    {
        $result = parent::updateSkillGroup($args->toArray());
        return new UpdateSkillGroupResponse($result->toArray());
    }
}
