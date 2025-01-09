<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Version
 * @property string $VerifiedAccessInstanceId
 * @property string $Region
 * @property list<'jamf'|'crowdstrike'|'jumpcloud'> $DeviceTrustProviders
 * @property Shapes\VerifiedAccessInstanceUserTrustProviderClientConfiguration $UserTrustProvider
 * @property list<Shapes\VerifiedAccessInstanceOpenVpnClientConfiguration> $OpenVpnConfigurations
 */
class ExportVerifiedAccessInstanceClientConfigurationResponse extends Response
{
}
