<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListDistributionConfigurations;

trait ListDistributionConfigurationsTrait
{
    /**
     * @param ListDistributionConfigurationsRequest $args
     * @return ListDistributionConfigurationsResponse
     */
    public function listDistributionConfigurations(ListDistributionConfigurationsRequest $args)
    {
        $result = parent::listDistributionConfigurations($args->toArray());
        return new ListDistributionConfigurationsResponse($result->toArray());
    }
}
