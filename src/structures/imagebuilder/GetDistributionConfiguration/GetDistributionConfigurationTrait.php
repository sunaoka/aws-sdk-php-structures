<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetDistributionConfiguration;

trait GetDistributionConfigurationTrait
{
    /**
     * @param GetDistributionConfigurationRequest $args
     * @return GetDistributionConfigurationResponse
     */
    public function getDistributionConfiguration(GetDistributionConfigurationRequest $args)
    {
        $result = parent::getDistributionConfiguration($args->toArray());
        return new GetDistributionConfigurationResponse($result->toArray());
    }
}
