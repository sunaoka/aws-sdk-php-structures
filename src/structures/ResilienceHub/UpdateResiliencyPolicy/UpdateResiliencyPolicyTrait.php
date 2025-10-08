<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateResiliencyPolicy;

trait UpdateResiliencyPolicyTrait
{
    /**
     * @param UpdateResiliencyPolicyRequest $args
     * @return UpdateResiliencyPolicyResponse
     */
    public function updateResiliencyPolicy(UpdateResiliencyPolicyRequest $args)
    {
        $result = parent::updateResiliencyPolicy($args->toArray());
        return new UpdateResiliencyPolicyResponse($result->toArray());
    }
}
