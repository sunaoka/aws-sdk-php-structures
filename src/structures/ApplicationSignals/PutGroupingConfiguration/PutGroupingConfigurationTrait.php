<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\PutGroupingConfiguration;

trait PutGroupingConfigurationTrait
{
    /**
     * @param PutGroupingConfigurationRequest $args
     * @return PutGroupingConfigurationResponse
     */
    public function putGroupingConfiguration(PutGroupingConfigurationRequest $args)
    {
        $result = parent::putGroupingConfiguration($args->toArray());
        return new PutGroupingConfigurationResponse($result->toArray());
    }
}
