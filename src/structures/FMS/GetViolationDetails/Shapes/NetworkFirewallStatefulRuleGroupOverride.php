<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP_TO_ALERT' $Action
 */
class NetworkFirewallStatefulRuleGroupOverride extends Shape
{
    /**
     * @param array{Action?: 'DROP_TO_ALERT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
