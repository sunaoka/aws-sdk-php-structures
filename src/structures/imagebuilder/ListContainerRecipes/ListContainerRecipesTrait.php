<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListContainerRecipes;

trait ListContainerRecipesTrait
{
    /**
     * @param ListContainerRecipesRequest $args
     * @return ListContainerRecipesResponse
     */
    public function listContainerRecipes(ListContainerRecipesRequest $args)
    {
        $result = parent::listContainerRecipes($args->toArray());
        return new ListContainerRecipesResponse($result->toArray());
    }
}
