<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RejectSkill;

trait RejectSkillTrait
{
    /**
     * @param RejectSkillRequest $args
     * @return RejectSkillResponse
     */
    public function rejectSkill(RejectSkillRequest $args)
    {
        $result = parent::rejectSkill($args->toArray());
        return new RejectSkillResponse($result->toArray());
    }
}
