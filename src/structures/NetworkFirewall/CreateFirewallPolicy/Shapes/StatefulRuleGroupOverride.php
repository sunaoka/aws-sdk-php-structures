<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_TO_ALERT'|null $Action
 */
class StatefulRuleGroupOverride extends Shape
{
    /**
     * @param array{Action?: 'DROP_TO_ALERT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
