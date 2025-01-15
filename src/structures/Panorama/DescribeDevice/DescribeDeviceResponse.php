<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AlternateSoftwareMetadata>|null $AlternateSoftwares
 * @property string|null $Arn
 * @property 'AWS_PANORAMA'|'LENOVO'|null $Brand
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property Shapes\NetworkStatus|null $CurrentNetworkingStatus
 * @property string|null $CurrentSoftware
 * @property string|null $Description
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING'|null $DeviceAggregatedStatus
 * @property 'ONLINE'|'OFFLINE'|'AWAITING_CREDENTIALS'|'NOT_AVAILABLE'|'ERROR'|null $DeviceConnectionStatus
 * @property string|null $DeviceId
 * @property string|null $LatestAlternateSoftware
 * @property Shapes\LatestDeviceJob|null $LatestDeviceJob
 * @property string|null $LatestSoftware
 * @property \Aws\Api\DateTimeResult|null $LeaseExpirationTime
 * @property string|null $Name
 * @property Shapes\NetworkPayload|null $NetworkingConfiguration
 * @property 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING'|null $ProvisioningStatus
 * @property string|null $SerialNumber
 * @property array<string, string>|null $Tags
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE'|null $Type
 */
class DescribeDeviceResponse extends Response
{
}
