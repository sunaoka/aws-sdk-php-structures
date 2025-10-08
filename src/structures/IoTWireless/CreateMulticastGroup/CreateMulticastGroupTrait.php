<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateMulticastGroup;

trait CreateMulticastGroupTrait
{
    /**
     * @param CreateMulticastGroupRequest $args
     * @return CreateMulticastGroupResponse
     */
    public function createMulticastGroup(CreateMulticastGroupRequest $args)
    {
        $result = parent::createMulticastGroup($args->toArray());
        return new CreateMulticastGroupResponse($result->toArray());
    }
}
