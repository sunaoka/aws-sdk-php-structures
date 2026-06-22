<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListInstrumentationConfigurations;

trait ListInstrumentationConfigurationsTrait
{
    /**
     * @param ListInstrumentationConfigurationsRequest $args
     * @return ListInstrumentationConfigurationsResponse
     */
    public function listInstrumentationConfigurations(ListInstrumentationConfigurationsRequest $args)
    {
        $result = parent::listInstrumentationConfigurations($args->toArray());
        return new ListInstrumentationConfigurationsResponse($result->toArray());
    }
}
