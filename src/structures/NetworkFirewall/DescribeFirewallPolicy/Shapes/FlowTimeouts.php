<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TcpIdleTimeoutSeconds
 */
class FlowTimeouts extends Shape
{
    /**
     * @param array{TcpIdleTimeoutSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
