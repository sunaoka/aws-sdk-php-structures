<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutResolverRulePolicy;

trait PutResolverRulePolicyTrait
{
    /**
     * @param PutResolverRulePolicyRequest $args
     * @return PutResolverRulePolicyResponse
     */
    public function putResolverRulePolicy(PutResolverRulePolicyRequest $args)
    {
        $result = parent::putResolverRulePolicy($args->toArray());
        return new PutResolverRulePolicyResponse($result->toArray());
    }
}
