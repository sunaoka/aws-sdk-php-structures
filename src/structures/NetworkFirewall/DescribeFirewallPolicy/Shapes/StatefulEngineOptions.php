<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER' $RuleOrder
 * @property 'DROP'|'CONTINUE'|'REJECT' $StreamExceptionPolicy
 * @property FlowTimeouts $FlowTimeouts
 */
class StatefulEngineOptions extends Shape
{
    /**
     * @param array{
     *     RuleOrder?: 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER',
     *     StreamExceptionPolicy?: 'DROP'|'CONTINUE'|'REJECT',
     *     FlowTimeouts?: FlowTimeouts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
