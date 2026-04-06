<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyRuleGroupArn
 * @property string|null $ProxyRuleGroupName
 * @property Shapes\CreateProxyRulesByRequestPhase $Rules
 */
class CreateProxyRulesRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupArn?: string|null,
     *     ProxyRuleGroupName?: string|null,
     *     Rules: Shapes\CreateProxyRulesByRequestPhase
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
