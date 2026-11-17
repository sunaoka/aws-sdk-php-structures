<?php

namespace Sunaoka\Aws\Structures\SageMaker\PutEndpointPolicy;

trait PutEndpointPolicyTrait
{
    /**
     * @param PutEndpointPolicyRequest $args
     * @return PutEndpointPolicyResponse
     */
    public function putEndpointPolicy(PutEndpointPolicyRequest $args)
    {
        $result = parent::putEndpointPolicy($args->toArray());
        return new PutEndpointPolicyResponse($result->toArray());
    }
}
