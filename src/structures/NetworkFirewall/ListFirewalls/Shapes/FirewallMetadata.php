<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 */
class FirewallMetadata extends Shape
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
