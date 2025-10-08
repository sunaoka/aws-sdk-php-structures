<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverRule;

trait UpdateResolverRuleTrait
{
    /**
     * @param UpdateResolverRuleRequest $args
     * @return UpdateResolverRuleResponse
     */
    public function updateResolverRule(UpdateResolverRuleRequest $args)
    {
        $result = parent::updateResolverRule($args->toArray());
        return new UpdateResolverRuleResponse($result->toArray());
    }
}
