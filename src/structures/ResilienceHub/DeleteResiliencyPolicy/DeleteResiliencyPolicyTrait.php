<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteResiliencyPolicy;

trait DeleteResiliencyPolicyTrait
{
    /**
     * @param DeleteResiliencyPolicyRequest $args
     * @return DeleteResiliencyPolicyResponse
     */
    public function deleteResiliencyPolicy(DeleteResiliencyPolicyRequest $args)
    {
        $result = parent::deleteResiliencyPolicy($args->toArray());
        return new DeleteResiliencyPolicyResponse($result->toArray());
    }
}
