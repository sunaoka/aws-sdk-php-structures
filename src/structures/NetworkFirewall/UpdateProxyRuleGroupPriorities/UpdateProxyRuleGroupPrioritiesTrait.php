<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRuleGroupPriorities;

trait UpdateProxyRuleGroupPrioritiesTrait
{
    /**
     * @param UpdateProxyRuleGroupPrioritiesRequest $args
     * @return UpdateProxyRuleGroupPrioritiesResponse
     */
    public function updateProxyRuleGroupPriorities(UpdateProxyRuleGroupPrioritiesRequest $args)
    {
        $result = parent::updateProxyRuleGroupPriorities($args->toArray());
        return new UpdateProxyRuleGroupPrioritiesResponse($result->toArray());
    }
}
