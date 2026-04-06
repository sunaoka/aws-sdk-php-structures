<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchSkillGroups;

trait SearchSkillGroupsTrait
{
    /**
     * @param SearchSkillGroupsRequest $args
     * @return SearchSkillGroupsResponse
     */
    public function searchSkillGroups(SearchSkillGroupsRequest $args)
    {
        $result = parent::searchSkillGroups($args->toArray());
        return new SearchSkillGroupsResponse($result->toArray());
    }
}
