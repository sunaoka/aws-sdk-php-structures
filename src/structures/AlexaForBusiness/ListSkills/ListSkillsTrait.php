<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkills;

trait ListSkillsTrait
{
    /**
     * @param ListSkillsRequest $args
     * @return ListSkillsResponse
     */
    public function listSkills(ListSkillsRequest $args)
    {
        $result = parent::listSkills($args->toArray());
        return new ListSkillsResponse($result->toArray());
    }
}
