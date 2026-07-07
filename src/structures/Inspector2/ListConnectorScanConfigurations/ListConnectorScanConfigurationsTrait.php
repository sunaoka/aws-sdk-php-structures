<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectorScanConfigurations;

trait ListConnectorScanConfigurationsTrait
{
    /**
     * @param ListConnectorScanConfigurationsRequest $args
     * @return ListConnectorScanConfigurationsResponse
     */
    public function listConnectorScanConfigurations(ListConnectorScanConfigurationsRequest $args)
    {
        $result = parent::listConnectorScanConfigurations($args->toArray());
        return new ListConnectorScanConfigurationsResponse($result->toArray());
    }
}
