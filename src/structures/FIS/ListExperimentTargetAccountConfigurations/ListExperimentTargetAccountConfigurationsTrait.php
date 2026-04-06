<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperimentTargetAccountConfigurations;

trait ListExperimentTargetAccountConfigurationsTrait
{
    /**
     * @param ListExperimentTargetAccountConfigurationsRequest $args
     * @return ListExperimentTargetAccountConfigurationsResponse
     */
    public function listExperimentTargetAccountConfigurations(ListExperimentTargetAccountConfigurationsRequest $args)
    {
        $result = parent::listExperimentTargetAccountConfigurations($args->toArray());
        return new ListExperimentTargetAccountConfigurationsResponse($result->toArray());
    }
}
