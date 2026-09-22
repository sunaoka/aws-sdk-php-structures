<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\PutIntelligenceConfiguration;

trait PutIntelligenceConfigurationTrait
{
    /**
     * @param PutIntelligenceConfigurationRequest $args
     * @return PutIntelligenceConfigurationResponse
     */
    public function putIntelligenceConfiguration(PutIntelligenceConfigurationRequest $args)
    {
        $result = parent::putIntelligenceConfiguration($args->toArray());
        return new PutIntelligenceConfigurationResponse($result->toArray());
    }
}
