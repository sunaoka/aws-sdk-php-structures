<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSkillsStoreSkillsByCategory;

trait ListSkillsStoreSkillsByCategoryTrait
{
    /**
     * @param ListSkillsStoreSkillsByCategoryRequest $args
     * @return ListSkillsStoreSkillsByCategoryResponse
     */
    public function listSkillsStoreSkillsByCategory(ListSkillsStoreSkillsByCategoryRequest $args)
    {
        $result = parent::listSkillsStoreSkillsByCategory($args->toArray());
        return new ListSkillsStoreSkillsByCategoryResponse($result->toArray());
    }
}
