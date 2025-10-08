<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteTLSInspectionConfiguration;

trait DeleteTLSInspectionConfigurationTrait
{
    /**
     * @param DeleteTLSInspectionConfigurationRequest $args
     * @return DeleteTLSInspectionConfigurationResponse
     */
    public function deleteTLSInspectionConfiguration(DeleteTLSInspectionConfigurationRequest $args)
    {
        $result = parent::deleteTLSInspectionConfiguration($args->toArray());
        return new DeleteTLSInspectionConfigurationResponse($result->toArray());
    }
}
