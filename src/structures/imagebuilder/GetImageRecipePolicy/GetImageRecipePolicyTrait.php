<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipePolicy;

trait GetImageRecipePolicyTrait
{
    /**
     * @param GetImageRecipePolicyRequest $args
     * @return GetImageRecipePolicyResponse
     */
    public function getImageRecipePolicy(GetImageRecipePolicyRequest $args)
    {
        $result = parent::getImageRecipePolicy($args->toArray());
        return new GetImageRecipePolicyResponse($result->toArray());
    }
}
