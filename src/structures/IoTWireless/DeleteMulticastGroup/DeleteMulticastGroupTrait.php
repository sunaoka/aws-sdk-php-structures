<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteMulticastGroup;

trait DeleteMulticastGroupTrait
{
    /**
     * @param DeleteMulticastGroupRequest $args
     * @return DeleteMulticastGroupResponse
     */
    public function deleteMulticastGroup(DeleteMulticastGroupRequest $args)
    {
        $result = parent::deleteMulticastGroup($args->toArray());
        return new DeleteMulticastGroupResponse($result->toArray());
    }
}
