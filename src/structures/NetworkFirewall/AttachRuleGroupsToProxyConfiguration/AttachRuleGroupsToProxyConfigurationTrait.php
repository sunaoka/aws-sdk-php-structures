<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AttachRuleGroupsToProxyConfiguration;

trait AttachRuleGroupsToProxyConfigurationTrait
{
    /**
     * @param AttachRuleGroupsToProxyConfigurationRequest $args
     * @return AttachRuleGroupsToProxyConfigurationResponse
     */
    public function attachRuleGroupsToProxyConfiguration(AttachRuleGroupsToProxyConfigurationRequest $args)
    {
        $result = parent::attachRuleGroupsToProxyConfiguration($args->toArray());
        return new AttachRuleGroupsToProxyConfigurationResponse($result->toArray());
    }
}
