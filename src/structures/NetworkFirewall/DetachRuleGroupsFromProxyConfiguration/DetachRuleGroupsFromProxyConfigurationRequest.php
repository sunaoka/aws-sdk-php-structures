<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DetachRuleGroupsFromProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property list<string>|null $RuleGroupNames
 * @property list<string>|null $RuleGroupArns
 * @property string $UpdateToken
 */
class DetachRuleGroupsFromProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     RuleGroupNames?: list<string>|null,
     *     RuleGroupArns?: list<string>|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
