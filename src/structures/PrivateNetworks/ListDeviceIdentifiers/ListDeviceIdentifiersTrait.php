<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListDeviceIdentifiers;

trait ListDeviceIdentifiersTrait
{
    /**
     * @param ListDeviceIdentifiersRequest $args
     * @return ListDeviceIdentifiersResponse
     */
    public function listDeviceIdentifiers(ListDeviceIdentifiersRequest $args)
    {
        $result = parent::listDeviceIdentifiers($args->toArray());
        return new ListDeviceIdentifiersResponse($result->toArray());
    }
}
