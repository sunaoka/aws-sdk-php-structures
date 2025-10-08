<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListWorkerConfigurations;

trait ListWorkerConfigurationsTrait
{
    /**
     * @param ListWorkerConfigurationsRequest $args
     * @return ListWorkerConfigurationsResponse
     */
    public function listWorkerConfigurations(ListWorkerConfigurationsRequest $args)
    {
        $result = parent::listWorkerConfigurations($args->toArray());
        return new ListWorkerConfigurationsResponse($result->toArray());
    }
}
