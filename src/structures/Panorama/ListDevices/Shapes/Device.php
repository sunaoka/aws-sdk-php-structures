<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_PANORAMA'|'LENOVO' $Brand
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CurrentSoftware
 * @property string $Description
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING' $DeviceAggregatedStatus
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property LatestDeviceJob $LatestDeviceJob
 * @property \Aws\Api\DateTimeResult $LeaseExpirationTime
 * @property string $Name
 * @property 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING' $ProvisioningStatus
 * @property array<string, string> $Tags
 * @property 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE' $Type
 */
class Device extends Shape
{
    /**
     * @param array{
     *     Brand?: 'AWS_PANORAMA'|'LENOVO',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     CurrentSoftware?: string,
     *     Description?: string,
     *     DeviceAggregatedStatus?: 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING',
     *     DeviceId?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     LatestDeviceJob?: LatestDeviceJob,
     *     LeaseExpirationTime?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     ProvisioningStatus?: 'AWAITING_PROVISIONING'|'PENDING'|'SUCCEEDED'|'FAILED'|'ERROR'|'DELETING',
     *     Tags?: array<string, string>,
     *     Type?: 'PANORAMA_APPLIANCE_DEVELOPER_KIT'|'PANORAMA_APPLIANCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
