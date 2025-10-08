<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteFirewallManagerRuleGroups;

trait DeleteFirewallManagerRuleGroupsTrait
{
    /**
     * @param DeleteFirewallManagerRuleGroupsRequest $args
     * @return DeleteFirewallManagerRuleGroupsResponse
     */
    public function deleteFirewallManagerRuleGroups(DeleteFirewallManagerRuleGroupsRequest $args)
    {
        $result = parent::deleteFirewallManagerRuleGroups($args->toArray());
        return new DeleteFirewallManagerRuleGroupsResponse($result->toArray());
    }
}
