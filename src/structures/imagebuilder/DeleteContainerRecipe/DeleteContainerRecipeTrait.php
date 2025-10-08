<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteContainerRecipe;

trait DeleteContainerRecipeTrait
{
    /**
     * @param DeleteContainerRecipeRequest $args
     * @return DeleteContainerRecipeResponse
     */
    public function deleteContainerRecipe(DeleteContainerRecipeRequest $args)
    {
        $result = parent::deleteContainerRecipe($args->toArray());
        return new DeleteContainerRecipeResponse($result->toArray());
    }
}
