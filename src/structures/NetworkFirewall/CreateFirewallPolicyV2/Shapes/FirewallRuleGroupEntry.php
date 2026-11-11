<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $Priority
 * @property string|null $ResourceArn
 * @property FirewallRuleGroup|null $InlineRuleGroup
 */
class FirewallRuleGroupEntry extends Shape
{
    /**
     * @param array{
     *     Priority?: int<1, 65535>|null,
     *     ResourceArn?: string|null,
     *     InlineRuleGroup?: FirewallRuleGroup|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
