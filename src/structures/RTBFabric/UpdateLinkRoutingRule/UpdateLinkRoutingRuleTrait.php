<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkRoutingRule;

trait UpdateLinkRoutingRuleTrait
{
    /**
     * @param UpdateLinkRoutingRuleRequest $args
     * @return UpdateLinkRoutingRuleResponse
     */
    public function updateLinkRoutingRule(UpdateLinkRoutingRuleRequest $args)
    {
        $result = parent::updateLinkRoutingRule($args->toArray());
        return new UpdateLinkRoutingRuleResponse($result->toArray());
    }
}
