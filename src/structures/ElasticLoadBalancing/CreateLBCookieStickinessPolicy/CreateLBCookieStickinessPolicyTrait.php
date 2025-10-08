<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLBCookieStickinessPolicy;

trait CreateLBCookieStickinessPolicyTrait
{
    /**
     * @param CreateLBCookieStickinessPolicyRequest $args
     * @return CreateLBCookieStickinessPolicyResponse
     */
    public function createLBCookieStickinessPolicy(CreateLBCookieStickinessPolicyRequest $args)
    {
        $result = parent::createLBCookieStickinessPolicy($args->toArray());
        return new CreateLBCookieStickinessPolicyResponse($result->toArray());
    }
}
