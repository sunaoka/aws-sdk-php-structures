<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AllowUpdate
 * @property 'Enabled'|'Disabled' $LinuxSubscriptionsDiscovery
 * @property Shapes\LinuxSubscriptionsDiscoverySettings $LinuxSubscriptionsDiscoverySettings
 */
class UpdateServiceSettingsRequest extends Request
{
    /**
     * @param array{
     *     AllowUpdate?: bool|null,
     *     LinuxSubscriptionsDiscovery: 'Enabled'|'Disabled',
     *     LinuxSubscriptionsDiscoverySettings: Shapes\LinuxSubscriptionsDiscoverySettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
