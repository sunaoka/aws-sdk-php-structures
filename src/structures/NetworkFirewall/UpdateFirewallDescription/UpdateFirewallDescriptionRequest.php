<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string|null $Description
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class UpdateFirewallDescriptionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     Description?: string|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
