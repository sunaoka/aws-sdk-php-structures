<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteDistributionConfiguration;

trait DeleteDistributionConfigurationTrait
{
    /**
     * @param DeleteDistributionConfigurationRequest $args
     * @return DeleteDistributionConfigurationResponse
     */
    public function deleteDistributionConfiguration(DeleteDistributionConfigurationRequest $args)
    {
        $result = parent::deleteDistributionConfiguration($args->toArray());
        return new DeleteDistributionConfigurationResponse($result->toArray());
    }
}
