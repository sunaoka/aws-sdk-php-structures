<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADevices;

trait ListMFADevicesTrait
{
    /**
     * @param ListMFADevicesRequest $args
     * @return ListMFADevicesResponse
     */
    public function listMFADevices(ListMFADevicesRequest $args)
    {
        $result = parent::listMFADevices($args->toArray());
        return new ListMFADevicesResponse($result->toArray());
    }
}
