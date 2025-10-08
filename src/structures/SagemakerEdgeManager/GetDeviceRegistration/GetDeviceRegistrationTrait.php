<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeviceRegistration;

trait GetDeviceRegistrationTrait
{
    /**
     * @param GetDeviceRegistrationRequest $args
     * @return GetDeviceRegistrationResponse
     */
    public function getDeviceRegistration(GetDeviceRegistrationRequest $args)
    {
        $result = parent::getDeviceRegistration($args->toArray());
        return new GetDeviceRegistrationResponse($result->toArray());
    }
}
