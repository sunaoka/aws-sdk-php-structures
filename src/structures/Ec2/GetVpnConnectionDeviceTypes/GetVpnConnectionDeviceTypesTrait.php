<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes;

trait GetVpnConnectionDeviceTypesTrait
{
    /**
     * @param GetVpnConnectionDeviceTypesRequest $args
     * @return GetVpnConnectionDeviceTypesResponse
     */
    public function getVpnConnectionDeviceTypes(GetVpnConnectionDeviceTypesRequest $args)
    {
        $result = parent::getVpnConnectionDeviceTypes($args->toArray());
        return new GetVpnConnectionDeviceTypesResponse($result->toArray());
    }
}
