<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property int<1, 65535>|null $Priority
 * @property StatefulRuleGroupOverride|null $Override
 */
class StatefulRuleGroupReference extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Priority?: int<1, 65535>|null,
     *     Override?: StatefulRuleGroupOverride|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
