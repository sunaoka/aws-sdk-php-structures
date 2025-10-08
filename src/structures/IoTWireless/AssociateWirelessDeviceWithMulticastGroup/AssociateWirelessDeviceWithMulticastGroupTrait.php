<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateWirelessDeviceWithMulticastGroup;

trait AssociateWirelessDeviceWithMulticastGroupTrait
{
    /**
     * @param AssociateWirelessDeviceWithMulticastGroupRequest $args
     * @return AssociateWirelessDeviceWithMulticastGroupResponse
     */
    public function associateWirelessDeviceWithMulticastGroup(AssociateWirelessDeviceWithMulticastGroupRequest $args)
    {
        $result = parent::associateWirelessDeviceWithMulticastGroup($args->toArray());
        return new AssociateWirelessDeviceWithMulticastGroupResponse($result->toArray());
    }
}
