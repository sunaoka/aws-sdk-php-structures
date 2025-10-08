<?php

namespace Sunaoka\Aws\Structures\Kafka\PutClusterPolicy;

trait PutClusterPolicyTrait
{
    /**
     * @param PutClusterPolicyRequest $args
     * @return PutClusterPolicyResponse
     */
    public function putClusterPolicy(PutClusterPolicyRequest $args)
    {
        $result = parent::putClusterPolicy($args->toArray());
        return new PutClusterPolicyResponse($result->toArray());
    }
}
