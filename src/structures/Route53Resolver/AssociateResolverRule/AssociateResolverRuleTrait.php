<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverRule;

trait AssociateResolverRuleTrait
{
    /**
     * @param AssociateResolverRuleRequest $args
     * @return AssociateResolverRuleResponse
     */
    public function associateResolverRule(AssociateResolverRuleRequest $args)
    {
        $result = parent::associateResolverRule($args->toArray());
        return new AssociateResolverRuleResponse($result->toArray());
    }
}
