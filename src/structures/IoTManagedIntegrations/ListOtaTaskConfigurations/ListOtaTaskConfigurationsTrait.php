<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskConfigurations;

trait ListOtaTaskConfigurationsTrait
{
    /**
     * @param ListOtaTaskConfigurationsRequest $args
     * @return ListOtaTaskConfigurationsResponse
     */
    public function listOtaTaskConfigurations(ListOtaTaskConfigurationsRequest $args)
    {
        $result = parent::listOtaTaskConfigurations($args->toArray());
        return new ListOtaTaskConfigurationsResponse($result->toArray());
    }
}
