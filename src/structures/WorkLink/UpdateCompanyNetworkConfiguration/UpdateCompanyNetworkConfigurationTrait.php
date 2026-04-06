<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateCompanyNetworkConfiguration;

trait UpdateCompanyNetworkConfigurationTrait
{
    /**
     * @param UpdateCompanyNetworkConfigurationRequest $args
     * @return UpdateCompanyNetworkConfigurationResponse
     */
    public function updateCompanyNetworkConfiguration(UpdateCompanyNetworkConfigurationRequest $args)
    {
        $result = parent::updateCompanyNetworkConfiguration($args->toArray());
        return new UpdateCompanyNetworkConfigurationResponse($result->toArray());
    }
}
