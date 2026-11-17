<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpointPolicy;

trait DeleteEndpointPolicyTrait
{
    /**
     * @param DeleteEndpointPolicyRequest $args
     * @return DeleteEndpointPolicyResponse
     */
    public function deleteEndpointPolicy(DeleteEndpointPolicyRequest $args)
    {
        $result = parent::deleteEndpointPolicy($args->toArray());
        return new DeleteEndpointPolicyResponse($result->toArray());
    }
}
