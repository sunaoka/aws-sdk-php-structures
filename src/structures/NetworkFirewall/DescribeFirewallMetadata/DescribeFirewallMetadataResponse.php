<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallPolicyArn
 * @property string|null $Description
 * @property 'PROVISIONING'|'DELETING'|'READY'|null $Status
 * @property array<string, Shapes\AvailabilityZoneMetadata>|null $SupportedAvailabilityZones
 * @property string|null $TransitGatewayAttachmentId
 */
class DescribeFirewallMetadataResponse extends Response
{
}
