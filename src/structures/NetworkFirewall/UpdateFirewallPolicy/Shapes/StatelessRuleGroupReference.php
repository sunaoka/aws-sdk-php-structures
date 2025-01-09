<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property int $Priority
 */
class StatelessRuleGroupReference extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Priority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
