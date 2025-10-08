<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverRulePolicy;

trait GetResolverRulePolicyTrait
{
    /**
     * @param GetResolverRulePolicyRequest $args
     * @return GetResolverRulePolicyResponse
     */
    public function getResolverRulePolicy(GetResolverRulePolicyRequest $args)
    {
        $result = parent::getResolverRulePolicy($args->toArray());
        return new GetResolverRulePolicyResponse($result->toArray());
    }
}
