<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING' $DeviceAggregatedStatusFilter
 * @property int<0, 25> $MaxResults
 * @property string $NameFilter
 * @property string $NextToken
 * @property 'DEVICE_ID'|'CREATED_TIME'|'NAME'|'DEVICE_AGGREGATED_STATUS' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     DeviceAggregatedStatusFilter?: 'ERROR'|'AWAITING_PROVISIONING'|'PENDING'|'FAILED'|'DELETING'|'ONLINE'|'OFFLINE'|'LEASE_EXPIRED'|'UPDATE_NEEDED'|'REBOOTING',
     *     MaxResults?: int<0, 25>,
     *     NameFilter?: string,
     *     NextToken?: string,
     *     SortBy?: 'DEVICE_ID'|'CREATED_TIME'|'NAME'|'DEVICE_AGGREGATED_STATUS',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
