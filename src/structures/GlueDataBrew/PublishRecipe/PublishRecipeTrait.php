<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\PublishRecipe;

trait PublishRecipeTrait
{
    /**
     * @param PublishRecipeRequest $args
     * @return PublishRecipeResponse
     */
    public function publishRecipe(PublishRecipeRequest $args)
    {
        $result = parent::publishRecipe($args->toArray());
        return new PublishRecipeResponse($result->toArray());
    }
}
