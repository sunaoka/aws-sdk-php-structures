<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnectorScanConfiguration;

trait UpdateConnectorScanConfigurationTrait
{
    /**
     * @param UpdateConnectorScanConfigurationRequest $args
     * @return UpdateConnectorScanConfigurationResponse
     */
    public function updateConnectorScanConfiguration(UpdateConnectorScanConfigurationRequest $args)
    {
        $result = parent::updateConnectorScanConfiguration($args->toArray());
        return new UpdateConnectorScanConfigurationResponse($result->toArray());
    }
}
