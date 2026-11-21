<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class DescribeFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
