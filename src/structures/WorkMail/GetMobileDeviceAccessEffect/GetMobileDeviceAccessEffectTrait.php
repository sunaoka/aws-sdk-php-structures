<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect;

trait GetMobileDeviceAccessEffectTrait
{
    /**
     * @param GetMobileDeviceAccessEffectRequest $args
     * @return GetMobileDeviceAccessEffectResponse
     */
    public function getMobileDeviceAccessEffect(GetMobileDeviceAccessEffectRequest $args)
    {
        $result = parent::getMobileDeviceAccessEffect($args->toArray());
        return new GetMobileDeviceAccessEffectResponse($result->toArray());
    }
}
