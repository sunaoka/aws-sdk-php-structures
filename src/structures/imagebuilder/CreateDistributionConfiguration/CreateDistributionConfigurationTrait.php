<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateDistributionConfiguration;

trait CreateDistributionConfigurationTrait
{
    /**
     * @param CreateDistributionConfigurationRequest $args
     * @return CreateDistributionConfigurationResponse
     */
    public function createDistributionConfiguration(CreateDistributionConfigurationRequest $args)
    {
        $result = parent::createDistributionConfiguration($args->toArray());
        return new CreateDistributionConfigurationResponse($result->toArray());
    }
}
