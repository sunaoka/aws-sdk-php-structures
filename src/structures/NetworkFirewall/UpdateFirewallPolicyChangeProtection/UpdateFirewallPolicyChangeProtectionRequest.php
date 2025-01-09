<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyChangeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property bool $FirewallPolicyChangeProtection
 */
class UpdateFirewallPolicyChangeProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string,
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     FirewallPolicyChangeProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
