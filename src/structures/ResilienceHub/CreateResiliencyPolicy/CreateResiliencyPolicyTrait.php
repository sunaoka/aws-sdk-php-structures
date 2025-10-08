<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateResiliencyPolicy;

trait CreateResiliencyPolicyTrait
{
    /**
     * @param CreateResiliencyPolicyRequest $args
     * @return CreateResiliencyPolicyResponse
     */
    public function createResiliencyPolicy(CreateResiliencyPolicyRequest $args)
    {
        $result = parent::createResiliencyPolicy($args->toArray());
        return new CreateResiliencyPolicyResponse($result->toArray());
    }
}
