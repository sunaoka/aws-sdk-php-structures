<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateRecipe;

trait CreateRecipeTrait
{
    /**
     * @param CreateRecipeRequest $args
     * @return CreateRecipeResponse
     */
    public function createRecipe(CreateRecipeRequest $args)
    {
        $result = parent::createRecipe($args->toArray());
        return new CreateRecipeResponse($result->toArray());
    }
}
