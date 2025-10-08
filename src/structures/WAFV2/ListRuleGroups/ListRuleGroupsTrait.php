<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListRuleGroups;

trait ListRuleGroupsTrait
{
    /**
     * @param ListRuleGroupsRequest $args
     * @return ListRuleGroupsResponse
     */
    public function listRuleGroups(ListRuleGroupsRequest $args)
    {
        $result = parent::listRuleGroups($args->toArray());
        return new ListRuleGroupsResponse($result->toArray());
    }
}
