<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderRecipes;

trait ListRecommenderRecipesTrait
{
    /**
     * @param ListRecommenderRecipesRequest $args
     * @return ListRecommenderRecipesResponse
     */
    public function listRecommenderRecipes(ListRecommenderRecipesRequest $args)
    {
        $result = parent::listRecommenderRecipes($args->toArray());
        return new ListRecommenderRecipesResponse($result->toArray());
    }
}
