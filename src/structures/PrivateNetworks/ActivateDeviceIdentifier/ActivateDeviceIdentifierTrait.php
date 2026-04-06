<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateDeviceIdentifier;

trait ActivateDeviceIdentifierTrait
{
    /**
     * @param ActivateDeviceIdentifierRequest $args
     * @return ActivateDeviceIdentifierResponse
     */
    public function activateDeviceIdentifier(ActivateDeviceIdentifierRequest $args)
    {
        $result = parent::activateDeviceIdentifier($args->toArray());
        return new ActivateDeviceIdentifierResponse($result->toArray());
    }
}
