<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RulesString
 * @property list<FirewallRule>|null $FirewallRules
 * @property RulesSourceList|null $RulesSourceList
 */
class FirewallRulesSource extends Shape
{
    /**
     * @param array{
     *     RulesString?: string|null,
     *     FirewallRules?: list<FirewallRule>|null,
     *     RulesSourceList?: RulesSourceList|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
