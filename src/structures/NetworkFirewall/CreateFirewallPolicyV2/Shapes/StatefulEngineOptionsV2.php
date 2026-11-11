<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DROP'|'REJECT'|null $StreamExceptionPolicy
 * @property FlowTimeouts|null $FlowTimeouts
 */
class StatefulEngineOptionsV2 extends Shape
{
    /**
     * @param array{
     *     StreamExceptionPolicy?: 'DROP'|'REJECT'|null,
     *     FlowTimeouts?: FlowTimeouts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
