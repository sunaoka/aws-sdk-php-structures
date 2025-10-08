<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutImageRecipePolicy;

trait PutImageRecipePolicyTrait
{
    /**
     * @param PutImageRecipePolicyRequest $args
     * @return PutImageRecipePolicyResponse
     */
    public function putImageRecipePolicy(PutImageRecipePolicyRequest $args)
    {
        $result = parent::putImageRecipePolicy($args->toArray());
        return new PutImageRecipePolicyResponse($result->toArray());
    }
}
