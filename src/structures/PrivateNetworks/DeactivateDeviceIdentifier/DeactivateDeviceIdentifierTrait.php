<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeactivateDeviceIdentifier;

trait DeactivateDeviceIdentifierTrait
{
    /**
     * @param DeactivateDeviceIdentifierRequest $args
     * @return DeactivateDeviceIdentifierResponse
     */
    public function deactivateDeviceIdentifier(DeactivateDeviceIdentifierRequest $args)
    {
        $result = parent::deactivateDeviceIdentifier($args->toArray());
        return new DeactivateDeviceIdentifierResponse($result->toArray());
    }
}
