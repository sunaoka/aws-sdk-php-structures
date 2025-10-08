<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToMulticastGroup;

trait SendDataToMulticastGroupTrait
{
    /**
     * @param SendDataToMulticastGroupRequest $args
     * @return SendDataToMulticastGroupResponse
     */
    public function sendDataToMulticastGroup(SendDataToMulticastGroupRequest $args)
    {
        $result = parent::sendDataToMulticastGroup($args->toArray());
        return new SendDataToMulticastGroupResponse($result->toArray());
    }
}
