<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipe;

trait UpdateRecipeTrait
{
    /**
     * @param UpdateRecipeRequest $args
     * @return UpdateRecipeResponse
     */
    public function updateRecipe(UpdateRecipeRequest $args)
    {
        $result = parent::updateRecipe($args->toArray());
        return new UpdateRecipeResponse($result->toArray());
    }
}
