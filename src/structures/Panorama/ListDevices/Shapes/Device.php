<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_PANORAMA'|'LENOVO'|null $Brand
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $CurrentSoftware
 * @property string|null $Description
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING'|null $DeviceAggregatedStatus
 * @property string|null $DeviceId
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property LatestDeviceJob|null $LatestDeviceJob
 * @property \Aws\Api\DateTimeResult|null $LeaseExpirationTime
 * @property string|null $Name
 * @property 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING'|null $ProvisioningStatus
 * @property array<string, string>|null $Tags
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE'|null $Type
 */
class Device extends Shape
{
    /**
     * @param array{
     *     Brand?: 'AWS_PANORAMA'|'LENOVO'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentSoftware?: string|null,
     *     Description?: string|null,
     *     DeviceAggregatedStatus?: 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING'|null,
     *     DeviceId?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     LatestDeviceJob?: LatestDeviceJob|null,
     *     LeaseExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     ProvisioningStatus?: 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING'|null,
     *     Tags?: array<string, string>|null,
     *     Type?: 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
