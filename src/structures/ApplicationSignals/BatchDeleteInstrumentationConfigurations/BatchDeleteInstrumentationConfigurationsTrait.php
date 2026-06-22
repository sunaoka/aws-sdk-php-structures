<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations;

trait BatchDeleteInstrumentationConfigurationsTrait
{
    /**
     * @param BatchDeleteInstrumentationConfigurationsRequest $args
     * @return BatchDeleteInstrumentationConfigurationsResponse
     */
    public function batchDeleteInstrumentationConfigurations(BatchDeleteInstrumentationConfigurationsRequest $args)
    {
        $result = parent::batchDeleteInstrumentationConfigurations($args->toArray());
        return new BatchDeleteInstrumentationConfigurationsResponse($result->toArray());
    }
}
