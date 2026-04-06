<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGatewayCapabilityConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $capabilityNamespace
 * @property string $capabilityConfiguration
 * @property 'IN_SYNC'|'OUT_OF_SYNC'|'SYNC_FAILED'|'UNKNOWN'|'NOT_APPLICABLE' $capabilitySyncStatus
 */
class DescribeGatewayCapabilityConfigurationResponse extends Response
{
}
