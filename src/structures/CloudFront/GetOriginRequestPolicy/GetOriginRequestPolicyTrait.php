<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicy;

trait GetOriginRequestPolicyTrait
{
    /**
     * @param GetOriginRequestPolicyRequest $args
     * @return GetOriginRequestPolicyResponse
     */
    public function getOriginRequestPolicy(GetOriginRequestPolicyRequest $args)
    {
        $result = parent::getOriginRequestPolicy($args->toArray());
        return new GetOriginRequestPolicyResponse($result->toArray());
    }
}
