<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleName
 * @property string|null $Description
 * @property 'ALLOW'|'DENY'|'ALERT'|null $Action
 * @property list<ProxyRuleCondition>|null $Conditions
 */
class ProxyRule extends Shape
{
    /**
     * @param array{
     *     ProxyRuleName?: string|null,
     *     Description?: string|null,
     *     Action?: 'ALLOW'|'DENY'|'ALERT'|null,
     *     Conditions?: list<ProxyRuleCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
