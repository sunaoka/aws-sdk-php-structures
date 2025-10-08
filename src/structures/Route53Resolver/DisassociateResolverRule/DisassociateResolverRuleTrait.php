<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverRule;

trait DisassociateResolverRuleTrait
{
    /**
     * @param DisassociateResolverRuleRequest $args
     * @return DisassociateResolverRuleResponse
     */
    public function disassociateResolverRule(DisassociateResolverRuleRequest $args)
    {
        $result = parent::disassociateResolverRule($args->toArray());
        return new DisassociateResolverRuleResponse($result->toArray());
    }
}
