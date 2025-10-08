<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroups;

trait ListAvailableManagedRuleGroupsTrait
{
    /**
     * @param ListAvailableManagedRuleGroupsRequest $args
     * @return ListAvailableManagedRuleGroupsResponse
     */
    public function listAvailableManagedRuleGroups(ListAvailableManagedRuleGroupsRequest $args)
    {
        $result = parent::listAvailableManagedRuleGroups($args->toArray());
        return new ListAvailableManagedRuleGroupsResponse($result->toArray());
    }
}
