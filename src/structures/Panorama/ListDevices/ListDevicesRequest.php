<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING'|null $DeviceAggregatedStatusFilter
 * @property int<0, 25>|null $MaxResults
 * @property string|null $NameFilter
 * @property string|null $NextToken
 * @property 'DEVICE_ID'|'CREATED_TIME'|'NAME'|'DEVICE_AGGREGATED_STATUS'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceAggregatedStatusFilter?: 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING'|null,
     *     MaxResults?: int<0, 25>|null,
     *     NameFilter?: string|null,
     *     NextToken?: string|null,
     *     SortBy?: 'DEVICE_ID'|'CREATED_TIME'|'NAME'|'DEVICE_AGGREGATED_STATUS'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
