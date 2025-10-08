<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartBulkDisassociateWirelessDeviceFromMulticastGroup;

trait StartBulkDisassociateWirelessDeviceFromMulticastGroupTrait
{
    /**
     * @param StartBulkDisassociateWirelessDeviceFromMulticastGroupRequest $args
     * @return StartBulkDisassociateWirelessDeviceFromMulticastGroupResponse
     */
    public function startBulkDisassociateWirelessDeviceFromMulticastGroup(StartBulkDisassociateWirelessDeviceFromMulticastGroupRequest $args)
    {
        $result = parent::startBulkDisassociateWirelessDeviceFromMulticastGroup($args->toArray());
        return new StartBulkDisassociateWirelessDeviceFromMulticastGroupResponse($result->toArray());
    }
}
