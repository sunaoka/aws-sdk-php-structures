<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpointPolicy;

trait GetOriginEndpointPolicyTrait
{
    /**
     * @param GetOriginEndpointPolicyRequest $args
     * @return GetOriginEndpointPolicyResponse
     */
    public function getOriginEndpointPolicy(GetOriginEndpointPolicyRequest $args)
    {
        $result = parent::getOriginEndpointPolicy($args->toArray());
        return new GetOriginEndpointPolicyResponse($result->toArray());
    }
}
