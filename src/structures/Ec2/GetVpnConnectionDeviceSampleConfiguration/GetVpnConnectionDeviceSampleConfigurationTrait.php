<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceSampleConfiguration;

trait GetVpnConnectionDeviceSampleConfigurationTrait
{
    /**
     * @param GetVpnConnectionDeviceSampleConfigurationRequest $args
     * @return GetVpnConnectionDeviceSampleConfigurationResponse
     */
    public function getVpnConnectionDeviceSampleConfiguration(GetVpnConnectionDeviceSampleConfigurationRequest $args)
    {
        $result = parent::getVpnConnectionDeviceSampleConfiguration($args->toArray());
        return new GetVpnConnectionDeviceSampleConfigurationResponse($result->toArray());
    }
}
