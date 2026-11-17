<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetEndpointPolicy;

trait GetEndpointPolicyTrait
{
    /**
     * @param GetEndpointPolicyRequest $args
     * @return GetEndpointPolicyResponse
     */
    public function getEndpointPolicy(GetEndpointPolicyRequest $args)
    {
        $result = parent::getEndpointPolicy($args->toArray());
        return new GetEndpointPolicyResponse($result->toArray());
    }
}
