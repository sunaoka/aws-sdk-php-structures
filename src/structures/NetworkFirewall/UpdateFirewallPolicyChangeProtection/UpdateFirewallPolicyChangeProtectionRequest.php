<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyChangeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property bool $FirewallPolicyChangeProtection
 */
class UpdateFirewallPolicyChangeProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     FirewallPolicyChangeProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
