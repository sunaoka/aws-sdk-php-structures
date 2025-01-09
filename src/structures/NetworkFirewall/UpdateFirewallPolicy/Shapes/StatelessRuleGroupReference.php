<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property int<1, 65535> $Priority
 */
class StatelessRuleGroupReference extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Priority: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
