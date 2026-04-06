<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartBatchDeleteConfigurationTask;

trait StartBatchDeleteConfigurationTaskTrait
{
    /**
     * @param StartBatchDeleteConfigurationTaskRequest $args
     * @return StartBatchDeleteConfigurationTaskResponse
     */
    public function startBatchDeleteConfigurationTask(StartBatchDeleteConfigurationTaskRequest $args)
    {
        $result = parent::startBatchDeleteConfigurationTask($args->toArray());
        return new StartBatchDeleteConfigurationTaskResponse($result->toArray());
    }
}
