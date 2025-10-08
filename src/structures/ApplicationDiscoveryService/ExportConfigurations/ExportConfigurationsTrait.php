<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ExportConfigurations;

trait ExportConfigurationsTrait
{
    /**
     * @return ExportConfigurationsResponse
     */
    public function exportConfigurations()
    {
        $result = parent::exportConfigurations();
        return new ExportConfigurationsResponse($result->toArray());
    }
}
