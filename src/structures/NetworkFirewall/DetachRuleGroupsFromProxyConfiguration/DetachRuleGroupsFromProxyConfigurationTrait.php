<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DetachRuleGroupsFromProxyConfiguration;

trait DetachRuleGroupsFromProxyConfigurationTrait
{
    /**
     * @param DetachRuleGroupsFromProxyConfigurationRequest $args
     * @return DetachRuleGroupsFromProxyConfigurationResponse
     */
    public function detachRuleGroupsFromProxyConfiguration(DetachRuleGroupsFromProxyConfigurationRequest $args)
    {
        $result = parent::detachRuleGroupsFromProxyConfiguration($args->toArray());
        return new DetachRuleGroupsFromProxyConfigurationResponse($result->toArray());
    }
}
