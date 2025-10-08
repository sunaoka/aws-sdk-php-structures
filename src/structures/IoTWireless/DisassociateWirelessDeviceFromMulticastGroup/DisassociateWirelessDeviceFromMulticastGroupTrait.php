<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateWirelessDeviceFromMulticastGroup;

trait DisassociateWirelessDeviceFromMulticastGroupTrait
{
    /**
     * @param DisassociateWirelessDeviceFromMulticastGroupRequest $args
     * @return DisassociateWirelessDeviceFromMulticastGroupResponse
     */
    public function disassociateWirelessDeviceFromMulticastGroup(DisassociateWirelessDeviceFromMulticastGroupRequest $args)
    {
        $result = parent::disassociateWirelessDeviceFromMulticastGroup($args->toArray());
        return new DisassociateWirelessDeviceFromMulticastGroupResponse($result->toArray());
    }
}
