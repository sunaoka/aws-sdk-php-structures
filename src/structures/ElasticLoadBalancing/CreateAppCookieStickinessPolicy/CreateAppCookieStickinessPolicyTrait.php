<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateAppCookieStickinessPolicy;

trait CreateAppCookieStickinessPolicyTrait
{
    /**
     * @param CreateAppCookieStickinessPolicyRequest $args
     * @return CreateAppCookieStickinessPolicyResponse
     */
    public function createAppCookieStickinessPolicy(CreateAppCookieStickinessPolicyRequest $args)
    {
        $result = parent::createAppCookieStickinessPolicy($args->toArray());
        return new CreateAppCookieStickinessPolicyResponse($result->toArray());
    }
}
