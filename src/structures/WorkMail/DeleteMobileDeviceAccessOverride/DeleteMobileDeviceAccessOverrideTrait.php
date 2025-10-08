<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMobileDeviceAccessOverride;

trait DeleteMobileDeviceAccessOverrideTrait
{
    /**
     * @param DeleteMobileDeviceAccessOverrideRequest $args
     * @return DeleteMobileDeviceAccessOverrideResponse
     */
    public function deleteMobileDeviceAccessOverride(DeleteMobileDeviceAccessOverrideRequest $args)
    {
        $result = parent::deleteMobileDeviceAccessOverride($args->toArray());
        return new DeleteMobileDeviceAccessOverrideResponse($result->toArray());
    }
}
