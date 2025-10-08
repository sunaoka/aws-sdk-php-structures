<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe;

trait GetImageRecipeTrait
{
    /**
     * @param GetImageRecipeRequest $args
     * @return GetImageRecipeResponse
     */
    public function getImageRecipe(GetImageRecipeRequest $args)
    {
        $result = parent::getImageRecipe($args->toArray());
        return new GetImageRecipeResponse($result->toArray());
    }
}
