<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTargetAccountConfiguration;

trait GetExperimentTargetAccountConfigurationTrait
{
    /**
     * @param GetExperimentTargetAccountConfigurationRequest $args
     * @return GetExperimentTargetAccountConfigurationResponse
     */
    public function getExperimentTargetAccountConfiguration(GetExperimentTargetAccountConfigurationRequest $args)
    {
        $result = parent::getExperimentTargetAccountConfiguration($args->toArray());
        return new GetExperimentTargetAccountConfigurationResponse($result->toArray());
    }
}
