<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRuleGroupPriorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property list<Shapes\ProxyRuleGroupPriority> $RuleGroups
 * @property string $UpdateToken
 */
class UpdateProxyRuleGroupPrioritiesRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     RuleGroups: list<Shapes\ProxyRuleGroupPriority>,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
