<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER'|null $RuleOrder
 * @property 'DROP'|'CONTINUE'|'REJECT'|null $StreamExceptionPolicy
 * @property FlowTimeouts|null $FlowTimeouts
 */
class StatefulEngineOptions extends Shape
{
    /**
     * @param array{
     *     RuleOrder?: 'DEFAULT_ACTION_ORDER'|'STRICT_ORDER'|null,
     *     StreamExceptionPolicy?: 'DROP'|'CONTINUE'|'REJECT'|null,
     *     FlowTimeouts?: FlowTimeouts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
