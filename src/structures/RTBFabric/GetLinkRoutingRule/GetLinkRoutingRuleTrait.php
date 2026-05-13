<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLinkRoutingRule;

trait GetLinkRoutingRuleTrait
{
    /**
     * @param GetLinkRoutingRuleRequest $args
     * @return GetLinkRoutingRuleResponse
     */
    public function getLinkRoutingRule(GetLinkRoutingRuleRequest $args)
    {
        $result = parent::getLinkRoutingRule($args->toArray());
        return new GetLinkRoutingRuleResponse($result->toArray());
    }
}
