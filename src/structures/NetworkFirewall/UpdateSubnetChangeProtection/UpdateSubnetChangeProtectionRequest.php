<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateSubnetChangeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property bool $SubnetChangeProtection
 */
class UpdateSubnetChangeProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     SubnetChangeProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
