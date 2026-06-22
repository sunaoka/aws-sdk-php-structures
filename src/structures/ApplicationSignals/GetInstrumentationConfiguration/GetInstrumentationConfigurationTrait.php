<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfiguration;

trait GetInstrumentationConfigurationTrait
{
    /**
     * @param GetInstrumentationConfigurationRequest $args
     * @return GetInstrumentationConfigurationResponse
     */
    public function getInstrumentationConfiguration(GetInstrumentationConfigurationRequest $args)
    {
        $result = parent::getInstrumentationConfiguration($args->toArray());
        return new GetInstrumentationConfigurationResponse($result->toArray());
    }
}
