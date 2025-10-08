<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration;

trait UpdateDistributionConfigurationTrait
{
    /**
     * @param UpdateDistributionConfigurationRequest $args
     * @return UpdateDistributionConfigurationResponse
     */
    public function updateDistributionConfiguration(UpdateDistributionConfigurationRequest $args)
    {
        $result = parent::updateDistributionConfiguration($args->toArray());
        return new UpdateDistributionConfigurationResponse($result->toArray());
    }
}
