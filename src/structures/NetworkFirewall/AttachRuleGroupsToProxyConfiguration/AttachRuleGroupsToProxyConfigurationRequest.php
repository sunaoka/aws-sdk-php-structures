<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AttachRuleGroupsToProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property list<Shapes\ProxyRuleGroupAttachment> $RuleGroups
 * @property string $UpdateToken
 */
class AttachRuleGroupsToProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     RuleGroups: list<Shapes\ProxyRuleGroupAttachment>,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
