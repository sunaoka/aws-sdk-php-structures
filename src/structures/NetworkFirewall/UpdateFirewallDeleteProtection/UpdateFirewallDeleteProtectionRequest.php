<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallDeleteProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property bool $DeleteProtection
 */
class UpdateFirewallDeleteProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string,
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     DeleteProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
