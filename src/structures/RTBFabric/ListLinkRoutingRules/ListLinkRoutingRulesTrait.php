<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinkRoutingRules;

trait ListLinkRoutingRulesTrait
{
    /**
     * @param ListLinkRoutingRulesRequest $args
     * @return ListLinkRoutingRulesResponse
     */
    public function listLinkRoutingRules(ListLinkRoutingRulesRequest $args)
    {
        $result = parent::listLinkRoutingRules($args->toArray());
        return new ListLinkRoutingRulesResponse($result->toArray());
    }
}
