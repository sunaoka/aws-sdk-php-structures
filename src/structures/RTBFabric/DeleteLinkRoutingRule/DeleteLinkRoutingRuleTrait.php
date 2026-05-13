<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteLinkRoutingRule;

trait DeleteLinkRoutingRuleTrait
{
    /**
     * @param DeleteLinkRoutingRuleRequest $args
     * @return DeleteLinkRoutingRuleResponse
     */
    public function deleteLinkRoutingRule(DeleteLinkRoutingRuleRequest $args)
    {
        $result = parent::deleteLinkRoutingRule($args->toArray());
        return new DeleteLinkRoutingRuleResponse($result->toArray());
    }
}
