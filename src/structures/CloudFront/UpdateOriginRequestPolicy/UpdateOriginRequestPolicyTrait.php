<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginRequestPolicy;

trait UpdateOriginRequestPolicyTrait
{
    /**
     * @param UpdateOriginRequestPolicyRequest $args
     * @return UpdateOriginRequestPolicyResponse
     */
    public function updateOriginRequestPolicy(UpdateOriginRequestPolicyRequest $args)
    {
        $result = parent::updateOriginRequestPolicy($args->toArray());
        return new UpdateOriginRequestPolicyResponse($result->toArray());
    }
}
