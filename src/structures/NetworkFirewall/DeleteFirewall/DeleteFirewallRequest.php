<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallName
 * @property string $FirewallArn
 */
class DeleteFirewallRequest extends Request
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
