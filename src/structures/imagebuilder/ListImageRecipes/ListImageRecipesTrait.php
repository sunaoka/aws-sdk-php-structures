<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageRecipes;

trait ListImageRecipesTrait
{
    /**
     * @param ListImageRecipesRequest $args
     * @return ListImageRecipesResponse
     */
    public function listImageRecipes(ListImageRecipesRequest $args)
    {
        $result = parent::listImageRecipes($args->toArray());
        return new ListImageRecipesResponse($result->toArray());
    }
}
