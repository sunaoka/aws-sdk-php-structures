<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverRules;

trait ListResolverRulesTrait
{
    /**
     * @param ListResolverRulesRequest $args
     * @return ListResolverRulesResponse
     */
    public function listResolverRules(ListResolverRulesRequest $args)
    {
        $result = parent::listResolverRules($args->toArray());
        return new ListResolverRulesResponse($result->toArray());
    }
}
