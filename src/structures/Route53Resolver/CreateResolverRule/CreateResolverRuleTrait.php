<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverRule;

trait CreateResolverRuleTrait
{
    /**
     * @param CreateResolverRuleRequest $args
     * @return CreateResolverRuleResponse
     */
    public function createResolverRule(CreateResolverRuleRequest $args)
    {
        $result = parent::createResolverRule($args->toArray());
        return new CreateResolverRuleResponse($result->toArray());
    }
}
