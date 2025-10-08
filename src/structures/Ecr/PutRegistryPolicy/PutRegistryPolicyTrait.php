<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryPolicy;

trait PutRegistryPolicyTrait
{
    /**
     * @param PutRegistryPolicyRequest $args
     * @return PutRegistryPolicyResponse
     */
    public function putRegistryPolicy(PutRegistryPolicyRequest $args)
    {
        $result = parent::putRegistryPolicy($args->toArray());
        return new PutRegistryPolicyResponse($result->toArray());
    }
}
