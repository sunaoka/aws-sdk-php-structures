<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_TO_ALERT'|null $Action
 */
class IpsRuleGroupOverride extends Shape
{
    /**
     * @param array{Action?: 'DROP_TO_ALERT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
