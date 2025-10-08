<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\DeleteOriginEndpointPolicy;

trait DeleteOriginEndpointPolicyTrait
{
    /**
     * @param DeleteOriginEndpointPolicyRequest $args
     * @return DeleteOriginEndpointPolicyResponse
     */
    public function deleteOriginEndpointPolicy(DeleteOriginEndpointPolicyRequest $args)
    {
        $result = parent::deleteOriginEndpointPolicy($args->toArray());
        return new DeleteOriginEndpointPolicyResponse($result->toArray());
    }
}
