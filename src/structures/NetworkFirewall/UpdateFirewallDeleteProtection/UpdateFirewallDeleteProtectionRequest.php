<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallDeleteProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property bool $DeleteProtection
 */
class UpdateFirewallDeleteProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     DeleteProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
