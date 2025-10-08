<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteImageRecipe;

trait DeleteImageRecipeTrait
{
    /**
     * @param DeleteImageRecipeRequest $args
     * @return DeleteImageRecipeResponse
     */
    public function deleteImageRecipe(DeleteImageRecipeRequest $args)
    {
        $result = parent::deleteImageRecipe($args->toArray());
        return new DeleteImageRecipeResponse($result->toArray());
    }
}
