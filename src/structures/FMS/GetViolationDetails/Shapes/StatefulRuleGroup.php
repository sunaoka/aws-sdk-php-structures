<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleGroupName
 * @property string|null $ResourceId
 * @property int|null $Priority
 * @property NetworkFirewallStatefulRuleGroupOverride|null $Override
 */
class StatefulRuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupName?: string|null,
     *     ResourceId?: string|null,
     *     Priority?: int|null,
     *     Override?: NetworkFirewallStatefulRuleGroupOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
