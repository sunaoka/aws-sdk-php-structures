<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe;

trait GetContainerRecipeTrait
{
    /**
     * @param GetContainerRecipeRequest $args
     * @return GetContainerRecipeResponse
     */
    public function getContainerRecipe(GetContainerRecipeRequest $args)
    {
        $result = parent::getContainerRecipe($args->toArray());
        return new GetContainerRecipeResponse($result->toArray());
    }
}
