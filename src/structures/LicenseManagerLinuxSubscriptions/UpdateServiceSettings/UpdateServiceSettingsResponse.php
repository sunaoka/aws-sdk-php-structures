<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $HomeRegions
 * @property 'Enabled'|'Disabled' $LinuxSubscriptionsDiscovery
 * @property Shapes\LinuxSubscriptionsDiscoverySettings $LinuxSubscriptionsDiscoverySettings
 * @property 'InProgress'|'Completed'|'Successful'|'Failed' $Status
 * @property array<string, string> $StatusMessage
 */
class UpdateServiceSettingsResponse extends Response
{
}
