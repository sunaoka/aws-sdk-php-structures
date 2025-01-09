<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AlternateSoftwareMetadata> $AlternateSoftwares
 * @property string $Arn
 * @property 'AWS_PANORAMA'|'LENOVO' $Brand
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property Shapes\NetworkStatus $CurrentNetworkingStatus
 * @property string $CurrentSoftware
 * @property string $Description
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING' $DeviceAggregatedStatus
 * @property 'ONLINE'|'OFFLINE'|'AWAITING_CREDENTIALS'|'NOT_AVAILABLE'|'ERROR' $DeviceConnectionStatus
 * @property string $DeviceId
 * @property string $LatestAlternateSoftware
 * @property Shapes\LatestDeviceJob $LatestDeviceJob
 * @property string $LatestSoftware
 * @property \Aws\Api\DateTimeResult $LeaseExpirationTime
 * @property string $Name
 * @property Shapes\NetworkPayload $NetworkingConfiguration
 * @property 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING' $ProvisioningStatus
 * @property string $SerialNumber
 * @property array<string, string> $Tags
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE' $Type
 */
class DescribeDeviceResponse extends Response
{
}
