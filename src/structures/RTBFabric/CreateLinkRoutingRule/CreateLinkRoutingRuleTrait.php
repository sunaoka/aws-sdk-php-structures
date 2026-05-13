<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateLinkRoutingRule;

trait CreateLinkRoutingRuleTrait
{
    /**
     * @param CreateLinkRoutingRuleRequest $args
     * @return CreateLinkRoutingRuleResponse
     */
    public function createLinkRoutingRule(CreateLinkRoutingRuleRequest $args)
    {
        $result = parent::createLinkRoutingRule($args->toArray());
        return new CreateLinkRoutingRuleResponse($result->toArray());
    }
}
