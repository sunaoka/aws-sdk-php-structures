<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverRule;

trait DeleteResolverRuleTrait
{
    /**
     * @param DeleteResolverRuleRequest $args
     * @return DeleteResolverRuleResponse
     */
    public function deleteResolverRule(DeleteResolverRuleRequest $args)
    {
        $result = parent::deleteResolverRule($args->toArray());
        return new DeleteResolverRuleResponse($result->toArray());
    }
}
