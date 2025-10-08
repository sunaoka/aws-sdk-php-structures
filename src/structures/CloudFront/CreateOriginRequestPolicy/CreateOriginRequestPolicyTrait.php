<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginRequestPolicy;

trait CreateOriginRequestPolicyTrait
{
    /**
     * @param CreateOriginRequestPolicyRequest $args
     * @return CreateOriginRequestPolicyResponse
     */
    public function createOriginRequestPolicy(CreateOriginRequestPolicyRequest $args)
    {
        $result = parent::createOriginRequestPolicy($args->toArray());
        return new CreateOriginRequestPolicyResponse($result->toArray());
    }
}
