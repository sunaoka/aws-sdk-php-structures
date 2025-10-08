<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateAvailabilityZoneChangeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property bool $AvailabilityZoneChangeProtection
 */
class UpdateAvailabilityZoneChangeProtectionRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     AvailabilityZoneChangeProtection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
