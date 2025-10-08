<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeBatchDeleteConfigurationTask;

trait DescribeBatchDeleteConfigurationTaskTrait
{
    /**
     * @param DescribeBatchDeleteConfigurationTaskRequest $args
     * @return DescribeBatchDeleteConfigurationTaskResponse
     */
    public function describeBatchDeleteConfigurationTask(DescribeBatchDeleteConfigurationTaskRequest $args)
    {
        $result = parent::describeBatchDeleteConfigurationTask($args->toArray());
        return new DescribeBatchDeleteConfigurationTaskResponse($result->toArray());
    }
}
