<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutContainerRecipePolicy;

trait PutContainerRecipePolicyTrait
{
    /**
     * @param PutContainerRecipePolicyRequest $args
     * @return PutContainerRecipePolicyResponse
     */
    public function putContainerRecipePolicy(PutContainerRecipePolicyRequest $args)
    {
        $result = parent::putContainerRecipePolicy($args->toArray());
        return new PutContainerRecipePolicyResponse($result->toArray());
    }
}
