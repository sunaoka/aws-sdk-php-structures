<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration;

trait UpdateTLSInspectionConfigurationTrait
{
    /**
     * @param UpdateTLSInspectionConfigurationRequest $args
     * @return UpdateTLSInspectionConfigurationResponse
     */
    public function updateTLSInspectionConfiguration(UpdateTLSInspectionConfigurationRequest $args)
    {
        $result = parent::updateTLSInspectionConfiguration($args->toArray());
        return new UpdateTLSInspectionConfigurationResponse($result->toArray());
    }
}
