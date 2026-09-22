<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetIntelligenceConfiguration;

trait GetIntelligenceConfigurationTrait
{
    /**
     * @param GetIntelligenceConfigurationRequest $args
     * @return GetIntelligenceConfigurationResponse
     */
    public function getIntelligenceConfiguration(GetIntelligenceConfigurationRequest $args)
    {
        $result = parent::getIntelligenceConfiguration($args->toArray());
        return new GetIntelligenceConfigurationResponse($result->toArray());
    }
}
