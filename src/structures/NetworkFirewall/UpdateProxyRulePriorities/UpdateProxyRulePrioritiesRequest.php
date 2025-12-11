<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRulePriorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 * @property 'PRE_DNS'|'PRE_REQ'|'POST_RES' $RuleGroupRequestPhase
 * @property list<Shapes\ProxyRulePriority> $Rules
 * @property string $UpdateToken
 */
class UpdateProxyRulePrioritiesRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null,
     *     RuleGroupRequestPhase: 'PRE_DNS'|'PRE_REQ'|'POST_RES',
     *     Rules: list<Shapes\ProxyRulePriority>,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
