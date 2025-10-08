<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions;

trait ListAvailableManagedRuleGroupVersionsTrait
{
    /**
     * @param ListAvailableManagedRuleGroupVersionsRequest $args
     * @return ListAvailableManagedRuleGroupVersionsResponse
     */
    public function listAvailableManagedRuleGroupVersions(ListAvailableManagedRuleGroupVersionsRequest $args)
    {
        $result = parent::listAvailableManagedRuleGroupVersions($args->toArray());
        return new ListAvailableManagedRuleGroupVersionsResponse($result->toArray());
    }
}
