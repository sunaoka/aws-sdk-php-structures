<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TcpIdleTimeoutSeconds
 */
class FlowTimeouts extends Shape
{
    /**
     * @param array{TcpIdleTimeoutSeconds?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
