<?php

namespace Sunaoka\Aws\Structures\Iam\ListVirtualMFADevices;

trait ListVirtualMFADevicesTrait
{
    /**
     * @param ListVirtualMFADevicesRequest $args
     * @return ListVirtualMFADevicesResponse
     */
    public function listVirtualMFADevices(ListVirtualMFADevicesRequest $args)
    {
        $result = parent::listVirtualMFADevices($args->toArray());
        return new ListVirtualMFADevicesResponse($result->toArray());
    }
}
