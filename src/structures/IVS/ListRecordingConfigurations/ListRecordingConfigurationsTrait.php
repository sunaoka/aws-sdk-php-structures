<?php

namespace Sunaoka\Aws\Structures\IVS\ListRecordingConfigurations;

trait ListRecordingConfigurationsTrait
{
    /**
     * @param ListRecordingConfigurationsRequest $args
     * @return ListRecordingConfigurationsResponse
     */
    public function listRecordingConfigurations(ListRecordingConfigurationsRequest $args)
    {
        $result = parent::listRecordingConfigurations($args->toArray());
        return new ListRecordingConfigurationsResponse($result->toArray());
    }
}
