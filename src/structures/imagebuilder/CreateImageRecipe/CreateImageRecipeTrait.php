<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImageRecipe;

trait CreateImageRecipeTrait
{
    /**
     * @param CreateImageRecipeRequest $args
     * @return CreateImageRecipeResponse
     */
    public function createImageRecipe(CreateImageRecipeRequest $args)
    {
        $result = parent::createImageRecipe($args->toArray());
        return new CreateImageRecipeResponse($result->toArray());
    }
}
