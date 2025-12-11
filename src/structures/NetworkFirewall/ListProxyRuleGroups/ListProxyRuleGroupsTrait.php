<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListProxyRuleGroups;

trait ListProxyRuleGroupsTrait
{
    /**
     * @param ListProxyRuleGroupsRequest $args
     * @return ListProxyRuleGroupsResponse
     */
    public function listProxyRuleGroups(ListProxyRuleGroupsRequest $args)
    {
        $result = parent::listProxyRuleGroups($args->toArray());
        return new ListProxyRuleGroupsResponse($result->toArray());
    }
}
