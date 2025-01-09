<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupName
 * @property string $ResourceId
 * @property int $Priority
 * @property NetworkFirewallStatefulRuleGroupOverride $Override
 */
class StatefulRuleGroup extends Shape
{
    /**
     * @param array{
     *     RuleGroupName?: string,
     *     ResourceId?: string,
     *     Priority?: int,
     *     Override?: NetworkFirewallStatefulRuleGroupOverride
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
