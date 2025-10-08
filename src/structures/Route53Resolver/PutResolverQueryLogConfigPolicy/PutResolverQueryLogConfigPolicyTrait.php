<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutResolverQueryLogConfigPolicy;

trait PutResolverQueryLogConfigPolicyTrait
{
    /**
     * @param PutResolverQueryLogConfigPolicyRequest $args
     * @return PutResolverQueryLogConfigPolicyResponse
     */
    public function putResolverQueryLogConfigPolicy(PutResolverQueryLogConfigPolicyRequest $args)
    {
        $result = parent::putResolverQueryLogConfigPolicy($args->toArray());
        return new PutResolverQueryLogConfigPolicyResponse($result->toArray());
    }
}
