<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateContainerRecipe;

trait CreateContainerRecipeTrait
{
    /**
     * @param CreateContainerRecipeRequest $args
     * @return CreateContainerRecipeResponse
     */
    public function createContainerRecipe(CreateContainerRecipeRequest $args)
    {
        $result = parent::createContainerRecipe($args->toArray());
        return new CreateContainerRecipeResponse($result->toArray());
    }
}
