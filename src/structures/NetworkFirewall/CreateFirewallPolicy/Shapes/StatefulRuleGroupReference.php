<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property int<1, 65535> $Priority
 * @property StatefulRuleGroupOverride $Override
 */
class StatefulRuleGroupReference extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Priority?: int<1, 65535>,
     *     Override?: StatefulRuleGroupOverride
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
