<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $HomeRegions
 * @property 'Enabled'|'Disabled'|null $LinuxSubscriptionsDiscovery
 * @property Shapes\LinuxSubscriptionsDiscoverySettings|null $LinuxSubscriptionsDiscoverySettings
 * @property 'InProgress'|'Completed'|'Successful'|'Failed'|null $Status
 * @property array<string, string>|null $StatusMessage
 */
class UpdateServiceSettingsResponse extends Response
{
}
