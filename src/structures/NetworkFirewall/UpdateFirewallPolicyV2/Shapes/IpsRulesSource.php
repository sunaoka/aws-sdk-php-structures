<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RulesString
 */
class IpsRulesSource extends Shape
{
    /**
     * @param array{RulesString?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
