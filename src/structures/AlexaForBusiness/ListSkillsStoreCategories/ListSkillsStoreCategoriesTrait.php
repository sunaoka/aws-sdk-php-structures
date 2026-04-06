<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreCategories;

trait ListSkillsStoreCategoriesTrait
{
    /**
     * @param ListSkillsStoreCategoriesRequest $args
     * @return ListSkillsStoreCategoriesResponse
     */
    public function listSkillsStoreCategories(ListSkillsStoreCategoriesRequest $args)
    {
        $result = parent::listSkillsStoreCategories($args->toArray());
        return new ListSkillsStoreCategoriesResponse($result->toArray());
    }
}
