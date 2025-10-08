<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteWorkerConfiguration;

trait DeleteWorkerConfigurationTrait
{
    /**
     * @param DeleteWorkerConfigurationRequest $args
     * @return DeleteWorkerConfigurationResponse
     */
    public function deleteWorkerConfiguration(DeleteWorkerConfigurationRequest $args)
    {
        $result = parent::deleteWorkerConfiguration($args->toArray());
        return new DeleteWorkerConfigurationResponse($result->toArray());
    }
}
