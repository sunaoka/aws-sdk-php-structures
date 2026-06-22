<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteInstrumentationConfiguration;

trait DeleteInstrumentationConfigurationTrait
{
    /**
     * @param DeleteInstrumentationConfigurationRequest $args
     * @return DeleteInstrumentationConfigurationResponse
     */
    public function deleteInstrumentationConfiguration(DeleteInstrumentationConfigurationRequest $args)
    {
        $result = parent::deleteInstrumentationConfiguration($args->toArray());
        return new DeleteInstrumentationConfigurationResponse($result->toArray());
    }
}
