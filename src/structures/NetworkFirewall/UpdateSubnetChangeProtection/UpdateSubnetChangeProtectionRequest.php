<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateSubnetChangeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property bool $SubnetChangeProtection
 */
class UpdateSubnetChangeProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string,
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     SubnetChangeProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
