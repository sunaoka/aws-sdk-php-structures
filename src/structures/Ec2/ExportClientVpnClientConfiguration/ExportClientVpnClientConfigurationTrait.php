<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportClientVpnClientConfiguration;

trait ExportClientVpnClientConfigurationTrait
{
    /**
     * @param ExportClientVpnClientConfigurationRequest $args
     * @return ExportClientVpnClientConfigurationResponse
     */
    public function exportClientVpnClientConfiguration(ExportClientVpnClientConfigurationRequest $args)
    {
        $result = parent::exportClientVpnClientConfiguration($args->toArray());
        return new ExportClientVpnClientConfigurationResponse($result->toArray());
    }
}
