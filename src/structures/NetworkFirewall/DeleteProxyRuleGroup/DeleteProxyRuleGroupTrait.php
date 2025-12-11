<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyRuleGroup;

trait DeleteProxyRuleGroupTrait
{
    /**
     * @param DeleteProxyRuleGroupRequest $args
     * @return DeleteProxyRuleGroupResponse
     */
    public function deleteProxyRuleGroup(DeleteProxyRuleGroupRequest $args)
    {
        $result = parent::deleteProxyRuleGroup($args->toArray());
        return new DeleteProxyRuleGroupResponse($result->toArray());
    }
}
