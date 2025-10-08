<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfigPolicy;

trait GetResolverQueryLogConfigPolicyTrait
{
    /**
     * @param GetResolverQueryLogConfigPolicyRequest $args
     * @return GetResolverQueryLogConfigPolicyResponse
     */
    public function getResolverQueryLogConfigPolicy(GetResolverQueryLogConfigPolicyRequest $args)
    {
        $result = parent::getResolverQueryLogConfigPolicy($args->toArray());
        return new GetResolverQueryLogConfigPolicyResponse($result->toArray());
    }
}
