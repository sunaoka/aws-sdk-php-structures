<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\PutOriginEndpointPolicy;

trait PutOriginEndpointPolicyTrait
{
    /**
     * @param PutOriginEndpointPolicyRequest $args
     * @return PutOriginEndpointPolicyResponse
     */
    public function putOriginEndpointPolicy(PutOriginEndpointPolicyRequest $args)
    {
        $result = parent::putOriginEndpointPolicy($args->toArray());
        return new PutOriginEndpointPolicyResponse($result->toArray());
    }
}
