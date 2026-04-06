<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations;

trait ListCisScanConfigurationsTrait
{
    /**
     * @param ListCisScanConfigurationsRequest $args
     * @return ListCisScanConfigurationsResponse
     */
    public function listCisScanConfigurations(ListCisScanConfigurationsRequest $args)
    {
        $result = parent::listCisScanConfigurations($args->toArray());
        return new ListCisScanConfigurationsResponse($result->toArray());
    }
}
