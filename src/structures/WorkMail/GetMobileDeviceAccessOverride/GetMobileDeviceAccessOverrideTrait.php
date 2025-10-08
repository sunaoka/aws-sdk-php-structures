<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessOverride;

trait GetMobileDeviceAccessOverrideTrait
{
    /**
     * @param GetMobileDeviceAccessOverrideRequest $args
     * @return GetMobileDeviceAccessOverrideResponse
     */
    public function getMobileDeviceAccessOverride(GetMobileDeviceAccessOverrideRequest $args)
    {
        $result = parent::getMobileDeviceAccessOverride($args->toArray());
        return new GetMobileDeviceAccessOverrideResponse($result->toArray());
    }
}
