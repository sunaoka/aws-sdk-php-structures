<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 * @property bool|null $DeleteAssociatedNatGateways
 */
class DeleteFirewallRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null,
     *     DeleteAssociatedNatGateways?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
