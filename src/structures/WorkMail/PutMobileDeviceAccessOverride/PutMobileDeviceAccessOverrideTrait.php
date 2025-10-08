<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutMobileDeviceAccessOverride;

trait PutMobileDeviceAccessOverrideTrait
{
    /**
     * @param PutMobileDeviceAccessOverrideRequest $args
     * @return PutMobileDeviceAccessOverrideResponse
     */
    public function putMobileDeviceAccessOverride(PutMobileDeviceAccessOverrideRequest $args)
    {
        $result = parent::putMobileDeviceAccessOverride($args->toArray());
        return new PutMobileDeviceAccessOverrideResponse($result->toArray());
    }
}
