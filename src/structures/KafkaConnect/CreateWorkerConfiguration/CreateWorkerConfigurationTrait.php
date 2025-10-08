<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateWorkerConfiguration;

trait CreateWorkerConfigurationTrait
{
    /**
     * @param CreateWorkerConfigurationRequest $args
     * @return CreateWorkerConfigurationResponse
     */
    public function createWorkerConfiguration(CreateWorkerConfigurationRequest $args)
    {
        $result = parent::createWorkerConfiguration($args->toArray());
        return new CreateWorkerConfigurationResponse($result->toArray());
    }
}
