<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateInstrumentationConfiguration;

trait CreateInstrumentationConfigurationTrait
{
    /**
     * @param CreateInstrumentationConfigurationRequest $args
     * @return CreateInstrumentationConfigurationResponse
     */
    public function createInstrumentationConfiguration(CreateInstrumentationConfigurationRequest $args)
    {
        $result = parent::createInstrumentationConfiguration($args->toArray());
        return new CreateInstrumentationConfigurationResponse($result->toArray());
    }
}
