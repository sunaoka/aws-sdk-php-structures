<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartBulkAssociateWirelessDeviceWithMulticastGroup;

trait StartBulkAssociateWirelessDeviceWithMulticastGroupTrait
{
    /**
     * @param StartBulkAssociateWirelessDeviceWithMulticastGroupRequest $args
     * @return StartBulkAssociateWirelessDeviceWithMulticastGroupResponse
     */
    public function startBulkAssociateWirelessDeviceWithMulticastGroup(
        StartBulkAssociateWirelessDeviceWithMulticastGroupRequest $args,
    ) {
        $result = parent::startBulkAssociateWirelessDeviceWithMulticastGroup($args->toArray());
        return new StartBulkAssociateWirelessDeviceWithMulticastGroupResponse($result->toArray());
    }
}
