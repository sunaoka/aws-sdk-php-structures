<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\AssociateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string $FirewallPolicyArn
 */
class AssociateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     FirewallPolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
