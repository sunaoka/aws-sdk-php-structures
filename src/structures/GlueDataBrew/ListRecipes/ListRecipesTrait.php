<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipes;

trait ListRecipesTrait
{
    /**
     * @param ListRecipesRequest $args
     * @return ListRecipesResponse
     */
    public function listRecipes(ListRecipesRequest $args)
    {
        $result = parent::listRecipes($args->toArray());
        return new ListRecipesResponse($result->toArray());
    }
}
