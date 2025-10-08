<?php

namespace Sunaoka\Aws\Structures\ivschat\ListLoggingConfigurations;

trait ListLoggingConfigurationsTrait
{
    /**
     * @param ListLoggingConfigurationsRequest $args
     * @return ListLoggingConfigurationsResponse
     */
    public function listLoggingConfigurations(ListLoggingConfigurationsRequest $args)
    {
        $result = parent::listLoggingConfigurations($args->toArray());
        return new ListLoggingConfigurationsResponse($result->toArray());
    }
}
