<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetDeviceIdentifier;

trait GetDeviceIdentifierTrait
{
    /**
     * @param GetDeviceIdentifierRequest $args
     * @return GetDeviceIdentifierResponse
     */
    public function getDeviceIdentifier(GetDeviceIdentifierRequest $args)
    {
        $result = parent::getDeviceIdentifier($args->toArray());
        return new GetDeviceIdentifierResponse($result->toArray());
    }
}
