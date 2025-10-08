<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListTLSInspectionConfigurations;

trait ListTLSInspectionConfigurationsTrait
{
    /**
     * @param ListTLSInspectionConfigurationsRequest $args
     * @return ListTLSInspectionConfigurationsResponse
     */
    public function listTLSInspectionConfigurations(ListTLSInspectionConfigurationsRequest $args)
    {
        $result = parent::listTLSInspectionConfigurations($args->toArray());
        return new ListTLSInspectionConfigurationsResponse($result->toArray());
    }
}
