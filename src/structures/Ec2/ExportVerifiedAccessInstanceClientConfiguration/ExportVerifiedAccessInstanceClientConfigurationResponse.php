<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportVerifiedAccessInstanceClientConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Version
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $Region
 * @property list<'jamf'|'crowdstrike'|'jumpcloud'>|null $DeviceTrustProviders
 * @property Shapes\VerifiedAccessInstanceUserTrustProviderClientConfiguration|null $UserTrustProvider
 * @property list<Shapes\VerifiedAccessInstanceOpenVpnClientConfiguration>|null $OpenVpnConfigurations
 */
class ExportVerifiedAccessInstanceClientConfigurationResponse extends Response
{
}
