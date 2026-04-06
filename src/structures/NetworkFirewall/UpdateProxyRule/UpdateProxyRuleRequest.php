<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 * @property string $ProxyRuleName
 * @property string|null $Description
 * @property 'ALLOW'|'DENY'|'ALERT'|null $Action
 * @property list<Shapes\ProxyRuleCondition>|null $AddConditions
 * @property list<Shapes\ProxyRuleCondition>|null $RemoveConditions
 * @property string $UpdateToken
 */
class UpdateProxyRuleRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupName?: string|null,
     *     ProxyRuleGroupArn?: string|null,
     *     ProxyRuleName: string,
     *     Description?: string|null,
     *     Action?: 'ALLOW'|'DENY'|'ALERT'|null,
     *     AddConditions?: list<Shapes\ProxyRuleCondition>|null,
     *     RemoveConditions?: list<Shapes\ProxyRuleCondition>|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
