<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverRule;

trait GetResolverRuleTrait
{
    /**
     * @param GetResolverRuleRequest $args
     * @return GetResolverRuleResponse
     */
    public function getResolverRule(GetResolverRuleRequest $args)
    {
        $result = parent::getResolverRule($args->toArray());
        return new GetResolverRuleResponse($result->toArray());
    }
}
