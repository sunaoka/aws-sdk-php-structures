<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POLICY_CONTROLLED' $EnforcementMode
 */
class IgwFirewallConfiguration extends Shape
{
    /**
     * @param array{EnforcementMode: 'POLICY_CONTROLLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
