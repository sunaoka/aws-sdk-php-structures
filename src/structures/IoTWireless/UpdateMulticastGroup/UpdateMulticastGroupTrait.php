<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateMulticastGroup;

trait UpdateMulticastGroupTrait
{
    /**
     * @param UpdateMulticastGroupRequest $args
     * @return UpdateMulticastGroupResponse
     */
    public function updateMulticastGroup(UpdateMulticastGroupRequest $args)
    {
        $result = parent::updateMulticastGroup($args->toArray());
        return new UpdateMulticastGroupResponse($result->toArray());
    }
}
