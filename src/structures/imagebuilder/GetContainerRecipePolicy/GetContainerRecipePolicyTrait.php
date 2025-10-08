<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipePolicy;

trait GetContainerRecipePolicyTrait
{
    /**
     * @param GetContainerRecipePolicyRequest $args
     * @return GetContainerRecipePolicyResponse
     */
    public function getContainerRecipePolicy(GetContainerRecipePolicyRequest $args)
    {
        $result = parent::getContainerRecipePolicy($args->toArray());
        return new GetContainerRecipePolicyResponse($result->toArray());
    }
}
