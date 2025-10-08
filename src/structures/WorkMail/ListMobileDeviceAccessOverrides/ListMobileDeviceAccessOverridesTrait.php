<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessOverrides;

trait ListMobileDeviceAccessOverridesTrait
{
    /**
     * @param ListMobileDeviceAccessOverridesRequest $args
     * @return ListMobileDeviceAccessOverridesResponse
     */
    public function listMobileDeviceAccessOverrides(ListMobileDeviceAccessOverridesRequest $args)
    {
        $result = parent::listMobileDeviceAccessOverrides($args->toArray());
        return new ListMobileDeviceAccessOverridesResponse($result->toArray());
    }
}
