<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ApproveSkill;

trait ApproveSkillTrait
{
    /**
     * @param ApproveSkillRequest $args
     * @return ApproveSkillResponse
     */
    public function approveSkill(ApproveSkillRequest $args)
    {
        $result = parent::approveSkill($args->toArray());
        return new ApproveSkillResponse($result->toArray());
    }
}
