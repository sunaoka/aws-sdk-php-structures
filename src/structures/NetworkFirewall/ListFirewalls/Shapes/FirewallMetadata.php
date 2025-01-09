<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallName
 * @property string $FirewallArn
 */
class FirewallMetadata extends Shape
{
    /**
     * @param array{
     *     FirewallName?: string,
     *     FirewallArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
