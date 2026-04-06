<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteSkillGroup;

trait DeleteSkillGroupTrait
{
    /**
     * @param DeleteSkillGroupRequest $args
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroup(DeleteSkillGroupRequest $args)
    {
        $result = parent::deleteSkillGroup($args->toArray());
        return new DeleteSkillGroupResponse($result->toArray());
    }
}
