<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMulticastGroup;

trait GetMulticastGroupTrait
{
    /**
     * @param GetMulticastGroupRequest $args
     * @return GetMulticastGroupResponse
     */
    public function getMulticastGroup(GetMulticastGroupRequest $args)
    {
        $result = parent::getMulticastGroup($args->toArray());
        return new GetMulticastGroupResponse($result->toArray());
    }
}
