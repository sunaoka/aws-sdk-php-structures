<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration;

trait CreateTLSInspectionConfigurationTrait
{
    /**
     * @param CreateTLSInspectionConfigurationRequest $args
     * @return CreateTLSInspectionConfigurationResponse
     */
    public function createTLSInspectionConfiguration(CreateTLSInspectionConfigurationRequest $args)
    {
        $result = parent::createTLSInspectionConfiguration($args->toArray());
        return new CreateTLSInspectionConfigurationResponse($result->toArray());
    }
}
