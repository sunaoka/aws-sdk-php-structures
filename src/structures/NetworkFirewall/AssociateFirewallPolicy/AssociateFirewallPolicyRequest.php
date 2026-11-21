<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string $FirewallPolicyArn
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class AssociateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     FirewallPolicyArn: string,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
