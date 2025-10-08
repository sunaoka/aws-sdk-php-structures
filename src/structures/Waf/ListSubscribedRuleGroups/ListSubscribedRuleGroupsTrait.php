<?php

namespace Sunaoka\Aws\Structures\Waf\ListSubscribedRuleGroups;

trait ListSubscribedRuleGroupsTrait
{
    /**
     * @param ListSubscribedRuleGroupsRequest $args
     * @return ListSubscribedRuleGroupsResponse
     */
    public function listSubscribedRuleGroups(ListSubscribedRuleGroupsRequest $args)
    {
        $result = parent::listSubscribedRuleGroups($args->toArray());
        return new ListSubscribedRuleGroupsResponse($result->toArray());
    }
}
