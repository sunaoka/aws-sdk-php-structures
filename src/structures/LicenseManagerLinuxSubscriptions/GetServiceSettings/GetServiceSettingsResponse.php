<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetServiceSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $HomeRegions
 * @property 'Enabled'|'Disabled' $LinuxSubscriptionsDiscovery
 * @property Shapes\LinuxSubscriptionsDiscoverySettings $LinuxSubscriptionsDiscoverySettings
 * @property 'InProgress'|'Completed'|'Successful'|'Failed' $Status
 * @property array<string, string> $StatusMessage
 */
class GetServiceSettingsResponse extends Response
{
}
